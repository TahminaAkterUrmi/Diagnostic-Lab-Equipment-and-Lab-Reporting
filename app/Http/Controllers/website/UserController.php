<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function registration(Request $request){
        //dd($request->all());
 
        $request->validate([
            // 'name' => 'required',
            'gender' => 'required',
            'email' => 'required | email | unique:users',
            'age' => 'required',
            'mobile' => 'required | min:11| max:11 | unique:users',

        ]);


        User::create([
            'name'=>$request->patient_name,
            'gender'=>$request->gender,
            'age'=>$request->age,
            'address'=>$request->address,
            
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'mobile'=>$request->mobile,
         ]);
         return redirect()->back()->with('message','Registration successful.');
    }
    public function login(Request $request){
        $userInfo=$request->except('_token');
        //        $credentials['email']=$request->user_email;
        //        $credentials['password']=$request->user_password;
        //        dd($credentials);
        //        $credentials=$request->only('user_email','user_password');

        
        if(Auth::attempt($userInfo)){
            return redirect()->back()->with('message','Login successful.');
        }
        return redirect()->back()->with('error','Invalid user credentials');

    }


    public function logout()
    { 
        // session()->flash('cart');
        session()->forget('cart');
        Auth::logout();
     return redirect()->back()->with('message','Logging out.');
    }


       public function profile(){
        //    dd(Auth::User()->id);
$categories= Category::all();
$profile = User::where('id', Auth::User()->id)->first();
      return view('website.pages.user_profile', compact('categories','profile'));


}




    }

