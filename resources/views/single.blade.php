@extends('layouts.app')
@section('content')
@include('partials.header')
<div class="page-wrapper">
       <!-- /.site-header header-one -->
        <section class="inner-banner">
            
        </section><!-- /.inner-banner -->
        <section class="book-ride-two">
             <div class="container ">
      <!-- /.block-title -->
      <div class="col-sm-6 offset-sm-3"> 
    
  @if(Session::has('message'))
     <p class="alert alert-info">
       {{ Session::get('message')}}
     </p>
     @endif
     </div>
<h2 class="text-center">{{ Carbon\Carbon::parse($offer->Departure_date)->format('D,d M Y') }}</h2>
        
    <div class="album py-5 ">
    <div class="container">
<form action="{{url('confirm',$offer->id)}}" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="card mb-4 shadow-sm">
            @csrf
           <div class="card-body"><b>{{$offer->Departure}}</b>
            <input type="hidden" name="departure" value="{{$offer->Departure}}">
            <small class="text-muted float-right">{{$offer->Departure_time}}</small>
                <br>

                <i class="fa fa-arrow-circle-o-down fa-2x" style="margin-left: 90px"></i>
                <br>
                                          <small class="text-muted float-right">{{$offer->Arrival_time}}</small>
             <b> <p class="card-text">{{$offer->Arrival}}</p></b>
             <input type="hidden" name="arrival" value="{{$offer->Arrival}}">
             <br>
             <h5 class="text-muted">Departure to Arrival km: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <b>{{$offer->km}} km</b></h5>
             <br>
              <h5 class="card-text">Total price for 1 passenger:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<b>{{$offer->Fare}} Rs</b></h5>
              <h5>Which type of Car is:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp{{$offer->Car_type}}</h5>
              <h5>No of seats in the car:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp{{$offer->Seats}}</h5>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
               
                
                </div>

                <small class="text-muted">{{$offer->created_at->diffForHumans()}}</small>
              </div>
              <input type="hidden" name="fare" value="{{$offer->Fare}}">
<center><button class="btn btn-secondary">Continue</button></center>

            </div>

          </div>
        </div>
       
          </div>

        </div>
        
      </div>            
</form>
                   
            </div><!-- /.container -->
        </section><!-- /.book-ride-two -->
        <!-- /.site-footer -->
    </div>

@include('partials.footer')
@endsection
