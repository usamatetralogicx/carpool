<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use RealRashid\SweetAlert\Facades\Alert;
use Validator;
use Response;
use App\Closed_account;
class ProfileController extends Controller
{
    public function index()
    {
    	if(Auth::check())
    	{
            $user=Auth::id();
            $find=User::find($user);
    		return view('profile',compact('find'));
    	}
    	else
    	{
    		
               Alert::warning('oops', 'please login first ');
               return view('index');
    	}

    }
    public function photo()
    {
         $user=Auth::id();
            $find=User::find($user);
        return view('photo',compact('find'));
    }
public function phone_verification()
{
    return view('phone_verification');
}
public function transactions()
{
    return view('transactions');
}
public function password()
{
    $find=Auth::id();
    return view('password',compact('find'));

}
public function close()
{
    $user=Auth::id();
    return view('close_account',compact('user'));
}
public function update(Request $request)
{
    $user=Auth::id();
     $messages=array(
            'username.required'=>'This field is required',
            'email.required'=>'This field is required',
           'phone.required'=>'This field is required',

        );
        $rules=array(
            'username'=>'required',
            'email'=> 'unique:users,email,'.$user,
            'phone'=>'required',
            'dob'=>'required',
            'country'=>'required',
        );
        $validator=\Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return Response::json(['success'=>'0','validation'=>'0','message'=>$validator->errors()]);
        }else{
            $user=User::find($request->id);
        $user->username=$request->username;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->date_of_birth=$request->dob;
        $user->Country=$request->country;
        if($user->save()){
            return Response::json(['success' => '1','message' => 'User updated successfully']);
        }else{
             return Response::json(['success' => '0','message' => 'Something is wrong. Please try again.']);

        }

        }

}

     public function update_password(Request $request)
    {
        $rules = [
            'old_password'=>['required'],
            'new_password' => ['required', 'string', 'min:8'],
            'confirm_password' => ['required', 'string','same:new_password'],

        ];
        $messages = [
            'old_password.required'=>'This field is required',
            'new_password.required'=>'This field is required',
            'confirm_password.required'=>'This field is required',
        ];
        $validator = Validator::make($request->all(), $rules,$messages);

        if ($validator->fails()) {
            return Response::json(['success'=>'0','validation'=>'0','message'=>$validator->errors()]);
        }
            $user = User::where('id', $request->id)->first();
            if($user)
            {
                if(\Hash::check($request->old_password, $user->password))
                {
                    $user->password = \Hash::make($request->new_password);
                    $user->update();
                    return Response::json([
                    'title'=>'Password Reset',
                    'message'=>'Your password is successfully changed. Please login with your new password.']);
                }
                else{
                 return Response::json([
                    'message'=>'Your  current password is invalid']);   
                }
            }   
        }
    public function closed_account(Request $request)
    {
            $rules=[
                'reason'=>'required',
                'recommend'=>'required',
                'improve_message'=>'required',
            ];
            $messages=[
                'reason.required'=>'This field is required',
                'recommend.required'=>'This field is required',
                'improve_message.required'=>'This field is required',
        ];
        $validator=Validator::make($request->all(),$rules,$messages);

        if ($validator->fails()) {
            return Response::json(['message'=>$validator->errors()]);
        }
        else
        
        {
                $user=User::where('id',$request->id)->first();
                if($user->closed_account == "Yes")
                {
                        return Response::json(['status'=>'0','message'=>'User account already closed']);
                }
                else
                {
                    $user->closed_account="Yes";
                    $user->save();
                    $closed = new Closed_account();
                    $closed->Reason=$request->reason;
                    $closed->Recommend=$request->recommend;
                    $closed->improvement_message=$request->improve_message;
                    $save=$closed->save();
                return Response::json(['status'=>'1','message'=>'User Account has been closed!!']);
                }
        
            

        }
    }
     public function update_photo(Request $request)
    {
        if($request->hasFile('image')&& $request->image->isValid())
        {
            $name = $request->image->getClientOriginalName();
            $extension =$request->image->extension();
            $size = $request->image->getSize();
            $filename = $name;;
            //$path = $request->image->storeAs('images',$filename,'public');
              $request->image->move(public_path('images'),$filename);
        
        }
         $user = User::where('id',$request->id)->first();

        $user->Image = $filename;
        $saved=$user->save();
        if($saved)
        {
         return Response::json(['status'=>'1','message'=>'User Image has been updated']);
    }
    }

}
