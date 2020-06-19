<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Validator;
use App\Route;
class RouteController extends Controller
{
    public function index()
    {
    	return view('admin.route_form');
    }
     public function create(Request $request){

    	$messages=array(
    		'km.required'=>'This field is required',
    		'fare.required'=>'This field is required',
    	);
    	$rules=array(
    		'km'=>'required',
    		'fare'=>'required'
    	);
    	$validator=Validator::make($request->all(),$rules,$messages);
    	if($validator->fails()){
    		return Response::json(['success'=>'0','validation'=>'0','message'=>$validator->errors()]);
    	}
    	else{
    		
    	$route=new Route();
    	$route->Per_KM=$request->km;
    	$route->Fare=$request->fare;
            if($route->save()){
              return Response::json(['success' => '1','message' => 'New Route added successfully']);

            }
            else {
              return Response::json(['success' => '0','message' => 'Something is wrong. Please try again.']);

            }
        
		}
    }
    public function viewall()
    {
    	$routes=Route::all();
    	return view('admin.viewroutes',compact('routes'));
    }
      public function delete($id)
    {
       $deleted =Route::find($id);
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
        public function edit($id)
    {
        $routes=Route::find($id);
        return view('admin/editroutes',compact('routes'));
    }
      public function update(Request $request){

    	$messages=array(
    		'to.required'=>'This field is required',
    		'from.required'=>'This field is required',
    	);
    	$rules=array(
    		'to'=>'required|string',
    		'km'=>'required',
    		'from'=>'required',
    		'fare'=>'required'
    	);
    	$validator=Validator::make($request->all(),$rules,$messages);
    	if($validator->fails()){
    		return Response::json(['success'=>'0','validation'=>'0','message'=>$validator->errors()]);
    	}
    	else{
    		
    	$route =Route::find($request->id);
    	$route->To=$request->to;
    	$route->From=$request->from;
    	$route->Per_KM=$request->km;
    	$route->Fare=$request->fare;
            if($route->save()){
              return Response::json(['success' => '1','message' => 'Route updated successfully']);

            }
            else {
              return Response::json(['success' => '0','message' => 'Something is wrong. Please try again.']);

            }
        
		}
    }
}
