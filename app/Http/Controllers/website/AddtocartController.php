<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Test;

class AddtocartController extends Controller
{
 public function addtocart($id){

   $test = Test::find($id);
 
 
   $cart = session()->has('cart') ? session()->get('cart') : [];
   
   if(array_key_exists($test->id,$cart)){

      $cart[$test->id]['quantity']++;
      $cart[$test->id]['total_price'] = $cart[$test->id]['quantity']*$cart[$test->id]['price'];
      
   }else{
      $cart[$test->id] = [
         'test_id' => $test->id,
         'name' => $test->name,
         'price' => $test->price,
         'quantity' => 1,
         'total_price' => $test->price*1
      ];
   }

   session()->put('cart',$cart);
   return redirect()->back()->with('message','Cart Added Successfully');

 }
 public function delete_add($id)
 {
    $carts = session('cart');
    unset($carts[$id]);
    session()->put('cart',$carts);
    return redirect()->back()->with('success','Test Deleted.');
 }

 
}
