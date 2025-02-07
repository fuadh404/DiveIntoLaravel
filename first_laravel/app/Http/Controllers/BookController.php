<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    function showBooks(Request $request) {
        echo "Hello from our laravel application";
    }

    function book1 (Request $request) {
        echo "Book 1";
    }
}
