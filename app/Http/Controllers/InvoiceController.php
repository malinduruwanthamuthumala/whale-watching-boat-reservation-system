<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use PDF;
use App\trips;
use DB;

class InvoiceController extends Controller
{
    public function generateinvoice(){
        $pdf = PDF::loadView('invoice');
        return $pdf ->stream('invoice.pdf');
    }

    public function displayinvoice(request $request){
       
        return View('invoice2');
        
    }
} 
