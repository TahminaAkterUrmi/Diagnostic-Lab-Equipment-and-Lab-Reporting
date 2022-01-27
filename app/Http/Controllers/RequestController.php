<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use App\Models\Detail;
use App\Models\Equipment;
use App\Models\Stock;
use Illuminate\Http\Request;

class RequestController extends Controller
{
   public function request_add(){

    $request_appointments = Appointment::where('status', 'pending')->get();
   //  dd($request_appointments);
    if (!empty($request_appointments)) {
      
      return view('admin.pages.users_request.request', compact('request_appointments'));
    }
    else {
       $request_appointments = "";
       return view('admin.pages.users_request.request', compact('request_appointments'));
    }



   }
   public function request_accept(Request $request, $id)
   {
      
      $testData =Detail::with(['equipment','test'])->find($id);
      $is_machine_avail=false;
      if($testData->test->machine)
      {
         $capacity=$testData->test->machine->daily_use;

         $daiyCount=Detail::where('test_id',$id)->whereDate('created_at',now())->count();
         if($capacity>=$daiyCount)
         {
            $is_machine_avail=true;
         }

      }else {
         $is_machine_avail=true;
         
      }

if($is_machine_avail==true)
{
   foreach($testData->equipment as $equipment)
   {
     
         Stock::create([
            'equipment_id'=>$equipment->equipment_id,
            'out'=>1,
            'in'=>0
         ]);


         $equipment_update=Equipment::find($equipment->equipment_id);
         $equipment_update->decrement('stock',1);
   }



   $testData->update([
     'status'=> 'accepted'
  ]);
}
      
return redirect()->back();
      // return view('admin.pages.user_appointments.appointment_user', compact('appointments'));
   }


   public function request_decline_reason($id){
      $request_appointment= Appointment::where('id',$id)->first();
      return view('admin.pages.users_request.appointment_decline', compact('request_appointment'));
      
   }

   public function request_decline(Request $request, $id){
      // dd($request->all(),$id);
      $appointments=Appointment::where('status', 'canceled')->get();
     Detail::where('appointment_id', $id)->update([
         'reason' =>$request->reason,
       

      ]);

      Appointment::where('id', $id)->update([
         'status'=> 'canceled'
      ]);
      return view('admin.pages.users_request.cancel_request', compact('appointments'));
      
   }
   public function request_cancel(){

      $appointments=Appointment::where('status', 'canceled')->get();
      return view('admin.pages.users_request.cancel_request', compact('appointments'));
   }
}
