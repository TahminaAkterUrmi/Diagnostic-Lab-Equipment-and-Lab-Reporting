<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Appointment;
use App\Models\Payment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function designdashboard(){

        $patients= User::where('gender','!=',NULL)->get()->count();

        $requested_appointments= Appointment::where('status', 'pending')->get()->count();
        $appointments= Appointment::where('status', 'accepted')->get()->count();
        $payments=Payment::where('payment_status', 'paid')->get()->count();
    return view('admin.pages.admin_dashboard.dashboard', compact('patients','requested_appointments','appointments', 'payments'));   
    }
}
