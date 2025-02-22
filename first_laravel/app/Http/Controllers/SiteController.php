<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function home(Request $request){
        return view('site.home');
    }

    function about(){
        return view('site.about');
    }
}
