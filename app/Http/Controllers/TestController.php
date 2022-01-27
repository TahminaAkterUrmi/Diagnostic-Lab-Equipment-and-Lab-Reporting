<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\Category;
use App\Models\Equipment;
use App\Models\Machine;
use App\Models\TestEquipement;

class TestController extends Controller
{
    public function test(){

        $key=null;
      
        if(request()->search)
        {
            $key=request()->search;
            $tests = Test::with('category')
                ->where('name','LIKE','%'.$key.'%')
                ->orWhere('price','LIKE','%'.$key.'%')
                ->get();
                return view ('admin.pages.tests.test', compact('tests', 'key'));
        }


        $data=category::all();

  $tests=Test::with(['category','machine','test_equipment'])->get();
 
        // dd($tests);
        return view ('admin.pages.tests.test', compact('tests', 'key', 'data'));
    }


    
    public function test_add(){

        $data=category::all();
        $machines=Machine::all();
        $equipements=Equipment::all();
      
        return view ('admin.pages.tests.test_add', compact('data','machines','equipements'));
    }
    public function test_store( Request $request){
//    dd($request->all());
   $test=Test::create([
    'name'=>$request->name,
    'details'=>$request->details,
     'price'=>$request->price,
      'category_id'=>$request->category,
      'machine_id'=>$request->machine_id,
  
   ]);

   foreach($request->equipement as $eq){
    //    dd($request->equipement);
       TestEquipement::create([
        'test_id'=>$test->id,
        'equipment_id'=>$eq,
       ]);
   }


   return redirect()->back()->with('success','Add Test Successfully');
    }

    public function view($test_id){

//dd($test_id);

 //        collection= get(), all()====== read with loop (foreach)
            //       object= first(), find(), findOrFail(),======direct
            $test=Test::find($test_id);
         
        //      $product=Product::where('id',$product_id)->first();
                return view('admin.pages.tests.test_details', compact('test'));
            }
      public function delete($test_id)
    {
       test::find($test_id)->delete();
       return redirect()->back()->with('success','Test Deleted.');
    }


    public function test_edit($test_id){
         $test=Test::find($test_id);
         $data=category::all();
        return view('admin.pages.tests.test_update', compact('test', ('data')));
    }
    public function test_update(Request $request, $test_id){
        $data=category::all();
        Test::where('id', $test_id)->update([

            'name'=>$request->name,
            'details'=>$request->details,
             'price'=>$request->price,
              'category_id'=>$request->category,
          

        ]);
        return redirect()->back()->with('success','Update Test Successfully');
 }

}

