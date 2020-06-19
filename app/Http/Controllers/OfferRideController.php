<?php

namespace App\Http\Controllers;

use App\Offer_ride;
use Illuminate\Http\Request;
use App\Route;
use Response;
use Validator;
use Auth;
use App\Buy_car;
use Session;
use Redirect;
use RealRashid\SweetAlert\Facades\Alert;
class OfferRideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check())
        {
               $admin=Route::where('Per_KM','1')->value('Fare');
        return view('offer_ride',compact('admin'));
        }
        else
        {
               Alert::warning('oops', 'please login first ');
               return view('login');

        }
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create(Request $request){

        $messages=array(
            'input.required'=>'This field is required',
            'input2.required'=>'This field is required',
            'departure_date.required'=>'This field is required',
            'departure_time.required'=>'This field is required',
            'arrival_date.required'=>'This field is required',
            'arrival_time.required'=>'This field is required',
        );
        $rules=array(
            'input'=>'required',
            'input2'=>'required',
            'departure_date'=>'required',
            'departure_date'=>'required',
            'arrival_date'=>'required',
            'arrival_time'=>'required'
        );
        $validator=Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return Response::json(['success'=>'0','validation'=>'0','message'=>$validator->errors()]);
        }
        else{
            
        $offer=new Offer_ride();
        $offer->Departure=$request->input;
        $offer->Arrival=$request->input2;
        $offer->Departure_date=$request->departure_date;
        $offer->Departure_time=$request->departure_time;
        $offer->Arrival_date=$request->arrival_date;
        $offer->Arrival_time=$request->arrival_time;
        $offer->Fare=$request->fare;
        $offer->Car_type=$request->radio_group;
        $offer->Seats=$request->seats;
        $offer->km=$request->km;
        $offer_confirm=$offer->save();


            if($offer_confirm){
              return Response::json(['success' => '1','message' => 'Ride has been added successfully']);
              
            }
            else {
              return Response::json(['success' => '0','message' => 'Something is wrong. Please try again.']);

            }
        
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
       $from= $request->from;
       $to=$request->to;
       
       $search=Offer_ride::where('Departure','LIKE','%'.$from.'%')->orWhere('Arrival','LIKE','%'.$from.'%')->get();
       
       if(count($search) > 0)
       {
         return view ( 'search',compact('search'));
       }
       else
       {
          return back()->with('message','No Details found. Try to search again !' );
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offer_ride  $offer_ride
     * @return \Illuminate\Http\Response
     */
    public function single($product)
    {
        $offer=Offer_ride::find($product);
        return view('single',compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offer_ride  $offer_ride
     * @return \Illuminate\Http\Response
     */
    public function confirm(Request $request, $id)
    {
        $loged_user=Auth::id();
        $Buy_car=new Buy_car();
        $Buy_car->user_id=$loged_user;
        $Buy_car->driver_id=$id;
        $Buy_car->Departure=$request->departure;
        $Buy_car->Arrival=$request->arrival;
        $Buy_car->Fare=$request->fare;
        $Buy_car->save();
       Session::flash('book', 'Thanks for registering a car!');
    return view('dashboard',compact('id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offer_ride  $offer_ride
     * @return \Illuminate\Http\Response
     */
    public function get($id)
    {
        $get=Buy_car::where('driver_id','=',$id)->get();
        return view('car_booking_list',compact('get'));
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offer_ride  $offer_ride
     * @return \Illuminate\Http\Response
     */
    public function ride_status($id)
    {
        $buy=Buy_car::find($id);
        if($buy)
        {
            if($buy->is_confirm == "No")
            {
                $buy->is_confirm = "Yes";
            }
            $save=$buy->save();
            if($save)
            {
            return Response::json(['status'=>'0','message'=>'Your Ride is confirmed by the driver']);
            }
            else
            {
            return Response::json(['status'=>'1','message'=>'Error during confirmation']); 
            }  
        }
}

}
