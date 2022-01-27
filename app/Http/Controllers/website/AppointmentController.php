<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Category;
use App\Models\Detail;
use Illuminate\Http\Request;
use App\Models\Slot;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Throwable;

class AppointmentController extends Controller
{
 public function appointment(){
   // session()->forget('cart.' . 12);
   $categories = Category::all();
   $slots= Slot::all();
return view('website.pages.appointment', compact('slots', 'categories'));

 }
 public function sureAppointment(Request $request){
//  dd($request->all());

$filename='';
//              step 1: check image exist in this request.
                 if($request->hasfile('image'))
                 {
                    $file=$request->file('image');
                    $filename=date('Ymshms').'.'. $file->getClientOriginalExtension();
                    $file->storeAs('/uploads', $filename);
                  //   dd($filename);

                 }
              
   DB::beginTransaction();
    try{
       $appointment =  Appointment::create
      ([
         'user_id'=>Auth::User()->id,
         'user_name'=>Auth::User()->name,
         'date'=>$request->date,
         'total_price'=>$request->total,
         'status'=>'pending',
         'total_paid'=>'0',
         'upload_report'=>$filename
        

       ]);
       
      
       $carts = session('cart');
   
       foreach($carts as $cart){
          Detail::create([
             'appointment_id' => $appointment->id,
             'test_id' => $cart['test_id'],
             'test_quantity' => $cart['quantity'],
             'unit_price' => $cart['price'],
             'subtotal_price' => $cart['total_price'],
             'slot' => $request->slots,
        
             
          ]);
       }
   
       if($appointment){
     
          session()->forget('cart');
       }
       DB::commit();
       return redirect()->back()->with('success','Request Submitted');

    }
    catch(Throwable $throwable){
      dd($throwable);
 DB::rollback();
      return redirect()->back()->with('error','Something when wrong');
      
    }
   
 }
 public function historyappointment()
 {
   $categories = Category::all();
   $appointment = Appointment::where('user_id', Auth::user()->id)->get();
   return view('website.pages.user_appointment', compact('categories', 'appointment'));

   }

 public function viewappointment($appointment_id)
   {
      $categories = Category::all();
      $appointments= Appointment::find($appointment_id);

      $appointment_details= Detail::where('appointment_id', $appointment_id)->get();
      // dd( $appointment_details);
      return view('website.pages.history_appointment_view', compact('appointments','appointment_details'));
   }



   public function cancel($id){
      Appointment::where('id', $id)->update([

         'status'=>'cancel'
      ]);
return redirect()->back();



   }

 }

 

