<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\Stock;
use App\Models\TestEquipement;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function list(){
 $equipments=Equipment::all();
    return view('admin.pages.equipments details.equipment_list', compact('equipments'));


    }
    public function addequipment(){




        return view('admin.pages.equipments details.add_equipment');
    }
    public function store_equipment(Request $request ){
      


       Equipment::create([
            'equipment_name'=>$request->name,
            'stock'=>'0',
            'status'=>'pending',
             'picture'=>$request->equipment_image,
              
          
           ]);
    
            return redirect()->back()->with('success','Add Equipment Successfully');
             }

             public function stock_list( ){
                $stocks=Stock::all();

return view('admin.pages.equipments_stocks.stock',compact('stocks'));

             }
             public function stock_add(){
                 $equipments=Equipment::all();

                return view('admin.pages.equipments_stocks.add_stock',compact('equipments'));
             }
             public function stock_store(Request $request){

                Stock::create([
                    'equipment_id'=>$request->equipment_id,
                    'in'=>$request->quantity,
                    'out'=>'0'
                ]);


                $equipment=Equipment::find($request->equipment_id);

                $equipment->increment('stock',$request->quantity);
                return redirect()->back()->with('success','Add Stock Successfully');
             }
             public function equipment_delete($equipment_id){
               equipment::find($equipment_id)->delete();
               return redirect()->back()->with('success','Equipment Deleted.');
             }

    }

