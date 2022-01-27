<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slot;
class SlotController extends Controller
{
    public function slotlist(){
        $slots = Slot::all();
        return view('admin.pages.slots.slotsetup', compact('slots'));
    }
    public function slotadd(){

return view('admin.pages.slots.slot_add');

    }
    public function slotstore(Request $request){


        Slot::create([
            'name'=>$request->name,
            'startingtime'=>$request->startingtime,
            'endingtime'=>$request->endingtime,

            
          

        ]);
    return redirect()->back()->with('success','Add slot Successfully');
    }
    public function slotremove($slot_id){
        slot::find($slot_id)->delete();
        return redirect()->back()->with('success','Slot Deleted.');



    }
}
