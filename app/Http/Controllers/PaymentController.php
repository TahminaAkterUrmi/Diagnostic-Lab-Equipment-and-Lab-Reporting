<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Appointment;
use App\Models\Test;
use App\Models\Detail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class PaymentController extends Controller
{
    public function paymentlist($id){
        $appointment = Appointment::find($id);
     return view('admin.pages.payment.details_payment',compact('appointment'));

    }
    public function store_payment(Request $request, $id){
        // dd($id);
        // dd($request->all());
        $appointment = Appointment::find($id);
        // dd($appointment);
        // dd($appointment->id);

        //payment update at appointment
        $appointment->update([
            'total_paid'=>  $appointment->total_paid + $request->current_payment
        ]);

        $appointment->refresh();

      
        $request->validate([
            // 'patitent_name' => 'required',
               'method' => 'required',
            'transcation_id' => 'required |unique:payments',
            

        ]);




       $payments= Payment::create([
            'appointment_id'=>$appointment->id,
             'patient_name'=>$request->patient_name,
             'method'=>$request->method,
             'transcation_date'=> Carbon::now(),
              'transcation_id'=>$request->transcation_id,
              'total_price'=>$request->total_amount,
              'current_payment'=>$request->current_payment,

            ]);



            
            if ($appointment->total_paid == $appointment->total_price) {
                $appointment->update([
                    'payment_status'=>  "paid"
                ]);
                Payment::where('appointment_id',$appointment->id)->update([
                    'payment_status'=>'paid'
                ]);
               
            }
            


        
            return redirect()->back()->with('success','Payment Submitted', compact('appointment'));


    }

    public function paid_payment(){

        $payments=Payment::where('payment_status','paid')->get();

        return view('admin.pages.payment.paid_paymentlist', compact('payments'));
    }
    public function receipt($id){
       
       
        $appointmentDetails =Detail::with('test')->where('appointment_id',$id)->get();
        $pay_receipt=Appointment::with('user')->find($id);
       
// dd($appointmentDetails);

return view ('admin.pages.user_appointments.receipt', compact('appointmentDetails', 'pay_receipt'));


    }
}
