<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    public function slot_list(){

      $machines=Machine::all();
        return view('admin.pages.machine slots.slot_list', compact('machines'));
    }
      public function slot_add() {

     return view('admin.pages.machine slots.slot_add_machine');


      }
      public function slotstore(Request $request){


        Machine::create([
          'machine_name'=>$request->name,
          'daily_use'=>$request->daily_use,
           'slot'=>$request->slot,
           'photo'=>$request->photo,
            
            
        
         ]);

        return redirect()->back()->with('success','Add Machine Successfully');
      }
}



