<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function categorylist(){
        $categories = Category::all();
     //dd($categories);
        return view ('admin.pages.test type.category_list', compact('categories'));
        }
        public function categoryadd(){
            return view ('admin.pages.test type.category_add');
        }
        public function categorystore(Request $request){
  //dd($request->all());
   Category::create([
    'name'=>$request->name,
    'details'=>$request->details
  
   ]);



   return redirect()->back()->with('success','Add Category Successfully');
        }
        public function delete_category($category_id){

            category::find($category_id)->delete();
            return redirect()->back()->with('success','Category Deleted.');
        }
}
