<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function userAppointment(){
     
            $appointments= Appointment::all();
          
             return view('admin.pages.user_appointments.appointment_user',  compact('appointments')); 
          }
              

    }

