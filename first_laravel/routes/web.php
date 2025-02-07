<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('books', [BookController::class, 'showBooks']);
Route::get('book/1', [BookController::class, 'book1']);