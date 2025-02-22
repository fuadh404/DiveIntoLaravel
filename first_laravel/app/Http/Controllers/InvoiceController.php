<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    function invoice(Request $request, $invoiceId){
        if ($request->has('download')){
            $type = $request->input('download');
            $printType = $request->input('print');
            if ($printType == 'color'){
                return response("Downloading Colored {$type} Invoice with ID: {$invoiceId}");
            } elseif ($printType == 'grayscale') {
                return response("Downloading Grayscale {$type} Invoice with ID: {$invoiceId}");
            }
            return response("Downloading {$type} Invoice with ID: {$invoiceId}");
        }

        if ($request->has('email')){
            $email = $request->input('email');
            return response("Emailing Invoice with Id: {$invoiceId}");
        }
        return response("Displaying Invoice with ID: {$invoiceId}");
    }

    function requestExample (Request $request){
        $greetings = $request->input('greetings', 'Hello');
        return response("Greetings: {$greetings }");
    }

}
