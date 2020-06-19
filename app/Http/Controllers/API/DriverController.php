<?php
namespace App\Http\Controllers\API;
use App\Mail\VerifyEmail;
use App\Mail\password;
use App\User;
use Auth;
use App\driver;
use App\Signup;
use App\verifytoken;
use App\passwordreset2;
use App\driververifytoken;
use App\driverpasswordreset;
use Hash;
use Illuminate\Http\Request;
use Mail;
use Response;
use Session;
use Validator;
use App\PasswordReset;
use App\Mail\ResetPassword;
use App\Models\UserCertification;
use App\Models\Certification;
use Image;
class DriverController extends Controller
{
	public function mail()
{
   $name = 'usama';
   Mail::to('usamaashraf42@gmail.com')->send(new VerifyEmail($name));
   
   return 'email sent';
}
    public function create(Request $request)
    {
        // return $request->all();
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:drivers'],
            'DOB'   =>['required'],
            'password' => ['required', 'string', 'min:8','regex:/^(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@_$%^&*-]).{6,}$/'],
            'c_password' => ['required','same:password'],

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
            $user =driver::create([
            'username'=>$request->name,
            'email'=>$request->email,
            'Phone'=>$request->phone,
            'date_of_birth'=>$request->DOB,
            'password'=>Hash::make($request->password),
            'C_password'=>Hash::make($request->c_password),
            'verifyToken' => $value ,
        ]);
            $verify=driververifytoken::create([
                'user_id'=>$user->id,
                'email'=>$user->email,
                'token'=>$user->verifyToken
            ]);
                 $reset=driverpasswordreset::create([
                    'user_id'=>$user->id,
                'email'=>$user->email,
                'token'=>$user->verifyToken
            ]);
        Mail::to($user->email)->send(new VerifyEmail(['verifyToken'=>$user->verifyToken]));
        // Session::flash('box_title', 'Welcome to SpareTime');
        // Session::flash('email_confirmation', 'Check your inbox to confirm your email address');
        return Response::json(['email_confirmation'=>1, 'message'=>'Check your inbox to confirm your email address']);
        // return redirect('/');
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
            'email' => 'required',
            'password' => 'required',
        );
        $validator = \Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Response::json(['success' => '0', 'validation' => '0', 'message' => $validator->errors()]);
        } else {
            $obj = driver::where('email', $request->email)->orWhere('phone','=',$request->email)->first();
            if ($obj) {
                if (\Hash::check($request->password, $obj->password)) {
                    if($obj->status == 0){
                        return Response::json(['email_confirmation'=> 'Your email is not verified please verify your email first.']);
                    }

                    return Response::json(['success' => '1', 'message' => 'You are successfully logged in']);

                } else {
                    return Response::json(['success' => '0', 'message' => 'Incorrect password']);

                }
            } else {
                return Response::json(['success' => '0', 'message' => 'Incorrect login credentials']);
            }
        }
    }

//     public function logg_in()
//     {
//         if (Session::has('user_id')) {
//             return true;
//         } else {
//             return false;
//         }
//     }
//     public function logout()
//     {
//         if (!$this->logg_in()) {
//             return redirect('/');
//         } else {
//             Session::flush();
//             return redirect('/');
//         }
//     }
 public function profileupdate(Request $request,$id)
   {
        $rules=array(
            'phone' => 'min:10|numeric',
            'c_password'=>'same:password'
        );
        $messages=[
            'c_password.same'=>'Confirm Password and Password does not match'
        ];
        $validator=Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return Response::json(['success'=>'0','validation'=>'0','message'=>$validator->errors()]);
        }
        else{   
            $info= driver::find($id);

        $info->username=$request->name;
        $info->email=$request->email;
        $info->phone=$request->phone;
        $info->date_of_birth=$request->DOB;
        $info->password=Hash::make($request->password);
        if($info->update()){
            return Response::json(['success' => '1','message' => 'Profile updated successfully']);
        }else{
             return Response::json(['success' => '0','message' => 'Something is wrong. Please try again.']);

        }

        }
    }
    public function verify(Request $request)
    {
        $user =driververifytoken::where('user_id',$request->user_id)->first();
        if($user)
        {
            $verify =driververifytoken::where('token',$request->token)->first();
            if($verify)
            {
                $user = driver::where('id', $user->user_id)->first();
                $user->status = 1;
            $user->update();
               driververifytoken::where('user_id', $request->user_id)->delete();
                  return Response()->json(['box_title'=> 'Thank you for signing up','email_confirmation'=>'Your email is verified successfully. You can sign in to your account now.']);

            }
            else{
                return Response()->json(['box_title'=>  'Oops','email_confirmation'=> 'Your email verification code is invalid']);
                }

            }
            else{
                 return Response()->json(['success'=>'0','message'=>'Something is wrong!']);

            }
        }
        
    // public function forgotPassword(Request $request)
    // {
    //     #token generete
    //     Hash::make(date(uniqid()))
    //     return view('sparetime.forgot');
    // }

    public function sentPasswordResetLink(Request $request)
    {
        
            $user=driver::where('email', $request->email)->first();
        if($user){
            driverpasswordreset::where('email', $request->email)->delete();
             $value=rand ( 1000 , 9999 );
            $token = passwordreset2::forceCreate([
                       
                'user_id'=>$user->id,
                'email' => $request->email,
                'token' => $value
            ]);
            Mail::to($request->email)->send(new password($token));
    }    
        return Response::json(['title'=>'Password Reset','message'=>'we have sent a password reset code.please check your email']);
    }


    public function newPassword(Request $request)
    {
        $user =driverpasswordreset::where('user_id',$request->user_id)->first();
        if($user)
        {
            $verify =driverpasswordreset::where('token',$request->token)->first();
            if($verify)
            {
                  return Response()->json(['status'=> '1','message'=>'Token match']);

            }
            else{
                return Response()->json(['status'=> '0','message'=> 'Token mismatch']);
                }

            }
            else{
                 return Response()->json(['success'=>'0','message'=>'Something is wrong!']);

            }
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
            return Response::json(['errors' => $validator->errors()]);
        }
            $user = driver::where('email', $request->email)->first();
            $user->password = \Hash::make($request->password);
            $user->update();
            driverpasswordreset::where('email', $request->email)->delete();
            return Response::json([
                'title'=>'Password Reset',
                'message'=>'Your password is successfully changed. Please login with your new password.']);
        
    }
//     public function manageprofile(){
//         $user = Auth::user();
//         if($user){
//             return view('sparetime.manageprofile', compact('user'));
//         }
//         return redirect('/');
//     }

//     public function updateprofile(Request $request){

//      $rules = [
//       'firstname'         => ['required', 'string', 'max:255'],
//       'short_description' => 'required',
//       'lastname'          => ['required', 'string', 'max:255'],
//       'home_address'      => ['required', 'string', 'max:255'],
//       'phone_number'      => ['required', 'string', 'max:255'],
//       'email'             => 'required|string|email|max:255|unique:users,email,'.$request->id,
//       'password'           => [ 'string', 'min:8','regex:/^(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@_$%^&*-]).{6,}$/','nullable'],

//   ];
//   $messages = array(
//     'firstname.required' => 'Please enter your email',
//     'lastname.required' => 'Please enter your lastname',
//     'home_address.required' => 'Please enter your home address',
//     'phone_number.required' => 'Please enter your phone number',
//     'email.email'=>'Email is not valid',
//     'password.regex' => 'Password must include at least one letter, one number, and one character'
// );

//   $validator = \Validator::make($request->all(), $rules, $messages);
//   if ($validator->fails()) {
//     return response([
//         'validation' => $validator->errors(), 
//         'message' => 'validation errors', 
//         'data' => []
//     ], 422);
// }

// else{
//     $obj = User::find($request->id);
//     $data = $request->input('image');

//     if($data){
//         if (preg_match('/^data:image\/(\w+);base64,/', $data, $type)) {

//             $data = substr($data, strpos($data, ',') + 1);

//             $type = strtolower($type[1]); // jpg, png, gif

//             if (!in_array($type, [ 'jpg', 'jpeg', 'gif', 'png' ])) {
//              return response([
//                 'validation' => array('image'=>'Incorrect file format'), 
//                 'message' => 'validation errors', 
//                 'data' => []
//             ], 422);
//          }

//          $data = base64_decode($data);
//          $destinationPath = public_path().'/profile/';
//          if (!file_exists($destinationPath)) {
//             mkdir($destinationPath, 0777, true);
//         }
//         $fileName = 'image_'.time().'.'.$type;
//         $tempFile = $destinationPath . $fileName;
//         file_put_contents($tempFile, $data);

//         $dst = public_path().'/profile/';
//         $img = Image::make($dst.$fileName);
//         $img->resize(170, 170, function ($constraint) {

//             $constraint->aspectRatio();

//         });
//         if (!file_exists($dst.'thumb/')) {
//             mkdir($dst.'thumb/', 0777, true);
//         }
//         $img->save($dst.'thumb/'.$fileName);

//         $obj->image_path = 'profile/';
//         $obj->thumnail_path = 'thumb/';
//         $obj->avatar = $fileName;
//     }
//     else{
//      return response([
//         'validation' => array('image'=>'Incorrect file format'), 
//         'message' => 'validation errors', 
//         'data' => []
//     ], 422);
//  }
// }
// $obj->firstname         = $request->firstname;
// $obj->lastname          = $request->lastname;
// $obj->home_address      = $request->home_address;
// $obj->phone_number      = $request->phone_number;
// $obj->email             = $request->email;
// $obj->short_description = $request->short_description;
// if($request->password){
//     $obj->password = Hash::make($request->password);
// }
// if($obj->save())
// {
//    return [
//     'message' => 'Success! User Updated Successfully', 
// ];
// }
// else{
//  return [
//     'message' => 'Success! Unable to update record', 
// ];
// }

// }
// }
// public function sparetimeNavs(){
//     $user = Auth::user();
//     if($user){
//         return view('sparetime.profile-nav', compact('user'));
//     }
//     return redirect('/');
// }
// public function uploadCertificates(){
//     $user = Auth::user();
//     if($user){
//         $user_id = $user->id;
//         $certificate_status = UserCertification::where('user_id',$user_id)->with('certificates')->get();
//         if( $certificate_status->first()){
//             return view('sparetime.upload-certificates', compact('user','certificate_status'));

//         }
//         $certificates = Certification::all();
//         if($certificates){
//             foreach($certificates as $certificate){                
//                 $usercertificate = new UserCertification();
//                 $usercertificate->user_id = $user_id;
//                 $usercertificate->certification_id = $certificate->id;
//                 $usercertificate->save();
//             }
//         }
//         $certificate_status = UserCertification::where('user_id',$user_id)->with('certificates')->get();
//         return view('sparetime.upload-certificates', compact('user','certificate_status'));

//     }
//     return redirect('/');
// }
// public function  saveCertificate(Request $request){
//     $user = Auth::user();
//     if($user){
//         $certificate = UserCertification::find($request->id);
//         if($certificate){
//             $data = $request->input('image');
//             if($data){
//                 if (preg_match('/^data:image\/(\w+);base64,/', $data, $type)) {

//                     $data = substr($data, strpos($data, ',') + 1);

//                     $type = strtolower($type[1]); 

//                     if (!in_array($type, [ 'jpg', 'jpeg', 'gif', 'png' ])) {
//                      return response([
//                         'validation' => array('image'=>'Incorrect file format'), 
//                         'message' => 'validation errors', 
//                         'data' => []
//                     ], 422);
//                  }

//                  $data = base64_decode($data);
//                  $destinationPath = public_path().'/certificates/';
//                  if (!file_exists($destinationPath)) {
//                     mkdir($destinationPath, 0777, true);
//                 }
//                 $fileName = 'image_'.time().'.'.$type;
//                 $tempFile = $destinationPath . $fileName;
//                 file_put_contents($tempFile, $data);

//                 $dst = public_path().'/certificates/';
//                 $img = Image::make($dst.$fileName);
//                 $img->resize(170, 170, function ($constraint) {

//                     $constraint->aspectRatio();

//                 });
//                 if (!file_exists($dst.'thumb/')) {
//                     mkdir($dst.'thumb/', 0777, true);
//                 }
//                 $img->save($dst.'thumb/'.$fileName);

//             }
//             $certificate->file_path = 'certificates/';
//             $certificate->thumbnail_path = 'thumb/';
//             $certificate->file_name = $fileName;
//             $certificate->status    = 1;
//             $certificate->save();
//             $certificate_status = UserCertification::where('user_id',$user->id)->with('certificates')->get();
//             return response(

//                 array(
//                     'data'    => $certificate_status,
//                     'message' => 'Cetificate Saved'
//                 )
//             );
//         }
//         return response([
//             'validation' => array('image'=>'Please Upload the Image'), 
//             'message' => 'validation errors', 
//             'data' => []
//         ], 422);
//     }
//     return response([ 
//         'message' => 'validation errors', 
//         'data' => []
//     ], 422);
// }

// return response([
//     'validation' => array('user'=>'User is not loggedIn'), 
//     'message' => 'validation errors', 
//     'data' => []
// ], 422);
// }
}
