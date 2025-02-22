<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    function download(){
        return response ("Downloading a FIle");
    }

    function downloadInvoice($invoiceId, $fileType="PDF"){
        return response(" Downloading {$fileType} Invoice ID:  {$invoiceId}");
    }

    function error(){
        return response("Error! No invoice id provided.", 404);
    }
}
