<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;
class BookRideController extends Controller
{
    public function index()
    {
    	 if(Auth::check())
        {
        return view('book-ride');
        }
        else
        {
               Alert::warning('oops', 'please login first ');
               return view('login');

        }
    	
    }
}
