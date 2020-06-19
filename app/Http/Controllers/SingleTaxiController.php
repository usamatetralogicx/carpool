<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleTaxiController extends Controller
{
    public function index(){
    	return view('single-taxi');
    }
}
