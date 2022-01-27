<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
public function checkpayment(){

 $payment_history= Payment::where('patient_name', Auth::user()->name)->where('payment_status','paid')->get();

    return view('website.pages.payment_history', compact('payment_history'));
}
public function report_check($report_id){

    $report= Appointment::find($report_id)->get();
            return view('website.pages.test_report', compact('report'));
        }
}
