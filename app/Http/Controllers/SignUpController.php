<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\VerifyEmail;
use App\Mail\VerifyPassword;
use App\User;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Signup;
use App\Verifytoken;
use App\Password_reset;
use Hash;
use Mail;
use Response;
use Session;
use Validator;
use App\Models\UserCertification;
use App\Models\Certification;
use Image;
class SignUpController extends Controller
{
     public function verify_get(){
        return view('tokenverify');
    }
    public function index(){
    	return view('sign-up');
    }
    public function save(Request $request)
    {
        // return $request->all();
        $rules = [
            'username' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'min:11'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'dob'   =>['required'],
            'gender'=>['required'],
            'password' => ['required', 'string', 'min:8','regex:/^(?=.*?[a-z])(?=.*?[0-9])/'],
            'confirmpassword' => ['required','same:password'],
            'country'=>['required'],
            
        ];
        $messages = array(
            'password.regex' => 'Password must include at least one letter, one number, and one special character',
            'dob.required'=>'Date of birth is required'

        );

        $validator = Validator::make($request->all(), $rules, $messages);

 if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        // if ($validator->fails()) {
        //      return Response::json(['success' => '0', 'validation' => '0', 'message' => $validator->errors()]);
        // }
else{

        $value=rand ( 1000 , 9999 );
            $user =User::create([
            'username'=>$request->username,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'date_of_birth'=>$request->dob,
            'Gender'=>$request->gender,
            'Country'=>$request->country,
            'password'=>Hash::make($request->password),
            'Country'=>$request->country,
            'Image'=>$request->image ? $request->image:'no-thumbnail.jpeg',
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

        $mail=Mail::to($user->email)->send(new VerifyEmail(['verifyToken'=>$user->verifyToken]));
                // Session::flash('box_title', 'Welcome to SpareTime');
        Session::flash('email_confirmation', 'Check your inbox to confirm your email address');
        // return Response::json(['email_confirmation'=>'1', 'message'=>'Check your inbox to confirm your email address']);
         return view('tokenverify',compact('verify'));
    }
}
 public function verify(Request $request)
    {
        $user =Verifytoken::where('user_id',$request->user_id)->first();
        
        if($user)
        {
            $verify =Verifytoken::where('token',$request->token)->first();
            if($verify)
            {
                $user = User::where('id', $user->user_id)->first();
                $user->status = 1;
            $user->update();
               Verifytoken::where('user_id', $request->user_id)->delete();
                  // return Response()->json(['box_title'=> 'Thank you for signing up','email_confirmation'=>'Your email is verified successfully. You can sign in to your account now.']);
                  Alert::success('YAHOO!', 'Your email is verified successfully. You can sign in to your account now.');
               return view('login');

            }
            else{
                 Alert::warning('oops', 'Your email verification code is invalid ');
                 return view('tokenverify');
                // return Response()->json(['box_title'=>  'Oops','email_confirmation'=> 'Your email verification code is invalid']);
                }

            }
            else{
                Alert::warning('oops', 'Something is wrong! ');
                return view('sign-up');
                 // return Response()->json(['success'=>'0','message'=>'Something is wrong!']);

            }
        }
        public function login(Request $request)
    {
        $messages = array(
            'email.required' => 'Please enter you email',
            'email.email' => 'Invalid email ',
            'password.required' => 'Please enter your password',
        );
        $rules = array(
            'email' => 'required|email',
            'password' => 'required',
        );
        $validator = \Validator::make($request->all(), $rules, $messages);
        if ($validator->fails())
         {
            // return Response::json(['success' => '0', 'validation' => '0', 'message' => $validator->errors()]);
            return back()->withErrors($validator);
        } else 
        {
            $obj = User::where('email', $request->email)->orWhere('phone','=',$request->email)->first();
            if ($obj)
             {
                if (\Hash::check($request->password, $obj->password)) {
                    if($obj->status == 0)
                    {
                        Alert::warning('oops', 'Your email is not verified please verify your email first. ');
                return view('login');
                        // return Response::json(['email_confirmation'=> 'Your email is not verified please verify your email first.']);
                    }
                    else
                    {
                        if($obj->closed_account=='Yes')
                        {
                             Alert::warning('Oops','You are not allowed to logged in.Your account was closed');
                        return view('index');
                        }
                        else
                        {
                    Auth::attempt(['email'=>$request->email,'password'=>$request->password]);
                        Alert::success('logged in','You are successfully logged in');
                        return view('index');
                    }
                     // return Response::json(['success' => '1', 'message' => 'You are successfully logged in']);
                    }

                } 
                else
                 {
                     Alert::warning('oops', 'Incorrect password');
                    return view('login');
                    // return Response::json(['success' => '0', 'message' => 'Incorrect password']);
                }
            } 
            else
             {
                 Alert::warning('oops', 'Incorrect login credentials');
                 return view('login');
                // return Response::json(['success' => '0', 'message' => 'Incorrect login credentials']);
            }
        }
    }
public function forgot()
{
    return view('forgetpassword');
}
 public function sentPasswordResetLink(Request $request)
    {
        
            $user=User::where('email', $request->email)->first();
        if($user){
            Password_reset::where('email', $request->email)->delete();
             $value=rand ( 1000 , 9999 );
            $verify = Password_reset::forceCreate([
                       
                'user_id'=>$user->id,
                'email' => $request->email,
                'token' => $value
            ]);
            Mail::to($request->email)->send(new VerifyPassword(['token'=>$verify->token]));
    }    
    Session::flash('email_confirmation', 'we have sent a password reset token.please check your email');
    return view('tokenpassword',compact('verify'));
        // return Response::json(['title'=>'Password Reset','message'=>'we have sent a password reset link.please check your email']);
    }


    public function newPassword(Request $request)
    {
        $user =Password_reset::where('user_id',$request->user_id)->first();
        if($user)
        {
            $verify =Password_reset::where('token',$request->token)->first();
            if($verify)
            {
                Alert::success('Success','Token match');
                        return view('newpassword');

                  // return Response()->json(['status'=> '1','message'=>'Token match']);

            }
            else{
                     Alert::warning('oops', 'Token mismatch');
                    return view('tokenverify');
                // return Response()->json(['status'=> '0','message'=> 'Token mismatch']);
                // }

            }
        }
            else{
                     Alert::warning('oops', 'Something is wrong!');
                    return view('tokenverify');
                 // return Response()->json(['success'=>'0','message'=>'Something is wrong!']);

            }
        }
        public function logout()
        {
            Auth::logout();
            return view('index');
        }

    public function updatePassword(Request $request)
    {
        $rules = [
            'email'=>['required'],
            'password' => ['required', 'string', 'min:8'],
            'c_password' => ['required', 'string','same:password'],

        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator);
            // return Response::json(['errors' => $validator->errors()]);
        }
            $user = User::where('email', $request->email)->first();
            $user->password = \Hash::make($request->password);
            $user->update();
            Password_Reset::where('email', $request->email)->delete();
            
    Alert::success('Success','Your password is successfully changed.please login with your new password');
                        return view('index');
            // return Response::json([
            //     'title'=>'Password Reset',
            //     'message'=>'Your password is successfully changed. Please login with your new password.']);
        
    }
     // public function update_password(Request $request)
    // {
    //     $rules = [
    //         'old_password'=>['required'],
    //         'new_password' => ['required', 'string', 'min:8'],
    //         'confirm_password' => ['required', 'string','same:new_password'],

    //     ];
    //     $messages = [
    //         'old_password.required'=>'This field is required',
    //         'new_password.required'=>'This field is required',
    //         'confirm_password.required'=>'This field is required',
    //     ];
    //     $validator = Validator::make($request->all(), $rules,$messages);

    //     if ($validator->fails()) {
    //         return Response::json(['errors' => $validator->errors()]);
    //     }
    //         $user = User::where('id', $request->id)->first();
    //         if($user)
    //         {
    //             if(\Hash::check($request->old_password, $user->password))
    //             {
    //                 $user->password = \Hash::make($request->new_password);
    //                 $user->update();
    //                 return Response::json([
    //                 'title'=>'Password Reset',
    //                 'message'=>'Your password is successfully changed. Please login with your new password.']);
    //             }
    //             else{
    //              return Response::json([
    //                 'message'=>'Your  current password is invalid']);   
    //             }
    //         }   
    //     }
}
