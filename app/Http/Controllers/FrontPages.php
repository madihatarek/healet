<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPages extends Controller
{
    public function home(){
        $title = "Healet Website";
        return view('home', compact('title'));
    }

    public function shop(){
        $title = "Shop";
        return view('shop', compact('title'));
    }

    public function about(){
        $title = "About Healet";
        return view('about', compact('title'));
    }

    public function blog(){
        $title = "Blog";
        return view('blog', compact('title'));
    }
}
