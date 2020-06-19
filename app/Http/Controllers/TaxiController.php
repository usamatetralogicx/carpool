<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxiController extends Controller
{
    public function index(){
    	return view('taxi');
    }
}
