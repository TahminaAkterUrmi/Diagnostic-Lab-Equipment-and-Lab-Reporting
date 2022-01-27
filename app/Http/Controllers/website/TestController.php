<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Test;
use App\Models\Category;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testlist(Request $request, $id) {
      //  dd($id);
      $categories = Category::all();
      $tests=Test::where('category_id', $id)->get();
    
       return view('website.pages.test_list',  compact('tests', 'categories')); 
    }
        

 public function categorylist(){
    $categories= Category::all();

    return view('website.pages.category', compact('categories'));
 }




    }





