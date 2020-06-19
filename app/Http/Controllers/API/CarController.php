<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\car;
use App\profile_information;
use Response;
class CarController extends Controller
{
   public function number(Request $request)
   {
   	$rules=[
   		'country'=>['required'],
   		'Number_plate'=>['required','min:4','max:5','unique:cars'],
   		 'company'=>['required'],
   		'model'=>['required'],
   		'color'=>['required'],
   		'seats'=>['required'],
   	];
   	$messages=[
   		'Number_plate.required'=>'Number Plate is required'];
   	$validator=Validator::make($request->all(),$rules,$messages);
   	if($validator->fails())
   	{
   		return response()->json(['status'=>'0','validation'=>'0','message'=>$validator->errors()]);
   	}
   	$car=car::create([
   		'Country'=>$request->country,
   		'Number_plate'=>$request->Number_plate,
   		'Company'=>$request->company,
   		'Model'=>$request->model,
   		'Color'=>$request->color,
   		'Seats'=>$request->seats
   	]);
   	return response()->json(['status'=>'1','message'=>'true']);

   }
   public function image(Request $request)
   {
    
    
   }
   
}
