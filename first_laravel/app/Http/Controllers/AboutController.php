<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function about(){
        return response("This is about Page");
    }

    function aboutMe(){
        return response("Hey, this is Fuad");
    }

    
}
