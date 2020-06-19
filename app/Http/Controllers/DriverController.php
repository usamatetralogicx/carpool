<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\driver;
use Response;
use Validator;
class DriverController extends Controller
{
    public function index()
   {
   	$drivers=driver::all();
   	return view('admin.drivers',compact('drivers'));
   	
   }
    public function delete($id)
    {
       $deleted =driver::find($id);
       $del=$deleted->delete();
       if($del)
       {
         return response()->json([
       
        'status'=>'0','message' => 'Record deleted successfully!'
    ]);
     }
     else
     {
         return response()->json([
       
        'status'=>'1','message' => 'Error while deleting record'
    ]);

     }
       }
        public function status($id)
       {
        $user=driver::find($id);
        if($user)
        {
            if($user->block == "1")
            {
                $user->block = "0";
            }
            else if($user->block== "0")
            {
                $user->block = "1";

            }
            $save=$user->save();
            if($save)
            {
            return Response::json(['status'=>'0','message'=>'User status has been changed']);
        }
        else
        {
            return Response::json(['status'=>'1','message'=>'Error during status changed']);

        }
        
        }

            }
}
