<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\VerifyEmail;
use App\Mail\password;
use App\User;
use Auth;
use App\Signup;
use App\Verifytoken;
use App\password_reset;
use Hash;
use Mail;
use Response;
use Session;
use Validator;
use App\PasswordReset;
use App\Mail\ResetPassword;
use App\Models\UserCertification;
use App\Models\Certification;
use Image;
class SignupController extends Controller
{
    public function save(Request $request)
    {
        // return $request->all();
        $rules = [
            'username' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'dob'   =>['required'],
            'gender'=>['required'],
            'password' => ['required', 'string', 'min:8','regex:/^(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@_$%^&*-]).{6,}$/'],
            'confirmpassword' => ['required','same:password'],
            

        ];
        $messages = array(
            'password.regex' => 'Password must include at least one letter, one number, and one special character'
        );

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
             return Response::json(['success' => '0', 'validation' => '0', 'message' => $validator->errors()]);
        }
else{
        $value=rand ( 1000 , 9999 );
            $user =User::create([
            'username'=>$request->username,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'date_of_birth'=>$request->dob,
            'gender'=>$request->gender,
            'Country'=>$request->country,
            'password'=>Hash::make($request->password),
            'Country'=>$request->country,
            'verifyToken' => $value ,
        ]);
            $verify=Verifytoken::create([
                'user_id'=>$user->id,
                'email'=>$user->email,
                'token'=>$user->verifyToken
            ]);
                 $reset=Password_reset::create([
                    'user_id'=>$user->id,
                'email'=>$user->email,
                'token'=>$user->verifyToken
            ]);
        Mail::to($user->email)->send(new VerifyEmail(['verifyToken'=>$user->verifyToken]));
        // Session::flash('box_title', 'Welcome to SpareTime');
        // Session::flash('email_confirmation', 'Check your inbox to confirm your email address');
        // return Response::json(['email_confirmation'=>'1', 'message'=>'Check your inbox to confirm your email address']);
         return back()->with('email_confirmation', 'Check your inbox to confirm your email address');
    }
}
}
