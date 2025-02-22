<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\SiteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('books', [BookController::class, 'showBooks']);
Route::get('book/1', [BookController::class, 'book1']);


Route::get('/about', [AboutController::class, 'about']);
Route::get('/about/me', [AboutController::class, 'aboutMe']);

Route::get('/download', [FileController::class, 'download']);

Route::get('/download/invoice/{invoiceId}', [FileController::class, 'downloadInvoice']);

// Route::get('/download/invoice/{invoiceId}/type', [FileController::class, 'downloadInvoice']);

Route::get('/download/invoice/{invoiceId}/type/{fileType?}', [FileController::class, 'downloadInvoice']);

Route::get('/download/invoice/', [FileController::class, 'error']);

// Route::get('/download/invoice/type/{type}', [FileController::class, 'downloadInvoiceWithType']);

Route::get('invoice/{invoiceId}', [InvoiceController::class, 'invoice']);

Route::get('/misc', [InvoiceController::class, 'requestExample']);

Route::get('/tasks', [TaskController::class, 'index']);

Route::get('/tasks/{taskId}', [TaskController::class, 'show']);

// Route::get('/', [SiteController::class, 'home']);

// Route::get('/about', [SiteController::class, 'about']);

Route::view('/', 'site.home');
Route::view('/about', 'site.about');

