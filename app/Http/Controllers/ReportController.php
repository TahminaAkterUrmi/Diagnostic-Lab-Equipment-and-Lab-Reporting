<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class ReportController extends Controller
{
   public function reportview($id){
// dd($id);
$report=Appointment::find($id);
// dd($report);

return view('admin.pages.test reports.patient_report',compact('report'));

   }
   public function reportupdate(Request $request, $report_id){
    // dd($request->all());
    // dd($report_id);
    $filename='';
    //              step 1: check image exist in this request.
                     if($request->hasfile('report'))
                     {
                        $file=$request->file('report');
                        $filename=date('Ymshms').'.'. $file->getClientOriginalExtension();
                        $file->storeAs('/uploads/report', $filename);
                      //   dd($filename);
    
                     }
    $report = Appointment::find($report_id)->update([
        'upload_report'=>$filename
    ]);
    return redirect()->back()->with('success','Uploaded Report Successfully');
    
          

    }



    
}
