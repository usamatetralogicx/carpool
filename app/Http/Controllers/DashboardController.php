<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
class DashboardController extends Controller
{
    public function index()
    {
    	if(Auth::check())
    	{
            
    	return view('dashboard');
    	}
    	else
        {
    		   Alert::warning('oops', 'please login first ');
               return view('login');

    	}

    }
}
