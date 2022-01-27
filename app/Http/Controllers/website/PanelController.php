<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function panel(){
        $categories = Category::all();
        return view ('website.pages.home', compact('categories'));
    }
    public function details_about(){

return view('website.pages.about_us');

    }
}
