<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Response;
use Validator;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
  public function login(Request $request)
  {
    $rules=[
      'email'=>'required',
      'password'=>'required',
    ];
    $messages=[
      'email.required'=>'This field is required',
      'password.required'=>'This field is required',
    ];
      $validator=\Validator::make($request->all(),$rules,$messages);
       if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        $user_data = [
        'email' => $request->email,
        'password'=>$request->password,
        ];
        if(Auth::attempt($user_data))
        {
                return redirect('users_table');
            }
    else
    {
        return back()->with('message','Incorrect email or password');
    }
    
  }
   public function index()
   {
    if(Auth::check())
    {
      $users=User::all();
    return view('admin.users',compact('users'));
    }
    else
    {
        return redirect('admin')->with('message','Ooops! You do not have access.<br> Please login first');
    }
   	
   	
   }
   public function logout()
   {
     Auth::logout();
     return view('admin/login');
   }
    public function delete($id)
    {
       $deleted =User::find($id);
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
        $user=User::find($id);
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
