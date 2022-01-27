<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Detail;

class AppointmentController extends Controller
{
    public function appointment_details($id){
        $appointment_details = Detail::where('appointment_id', $id)->get();
   $appointment = Appointment::find($id);

return view('admin.pages.user_appointments.appointment_details', compact('appointment_details','appointment'));


    }
}