@extends('layouts.app')
@section('style')
<style type="text/css">
    .color{
         background-color: #EDEDED;
    }
    .back{
        background-color: #EDEDED ;
    }
</style>
@endsection
@section('content')    
@include('partials.header')    
       <!-- /.site-header header-one -->
        <section class="inner-banner2">
            <div class="container">
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
                    <section class="book-ride-two2 container">
                          <div class="col-sm-6 offset-sm-3"> 
    
  @if(Session::has('book'))
     <p class="alert alert-info">
       {{ Session::get('book')}}
     </p>
     @endif
     </div>
 <div class="row">
                    <div class="col-lg-3 col-xlg-2 col-md-4">
                        <div class="stickyside">
                              <div class="list-group" id="top-menu">
                                <a  class="text-white list-group-item bg-secondary">Profile Information</a>
                                <a href="{{url('phone_verification')}}" class="list-group-item">Phone Verification </a>
                                <a href="{{url('photo')}}" class="list-group-item">Photo</a>

                                <a href="{{url('car')}}" class="list-group-item">Car</a>
                                @if(@$id)
                                <a href="{{url('driver_list',@$id)}}" class="list-group-item">Car Booking list</a>
                                @endif
                            </div>
                            <div class="list-group mt-3" id="top-menu">
                                <a href="#7" class="list-group-item bg-secondary text-white">Account</a>
                                <a href="#8" class="list-group-item">Completed transactions</a>
                                <a href="#9" class="list-group-item">Passwords</a>
                                <a href="#10" class="list-group-item">Close my account</a>
                            </div>
                              <div class="list-group mt-3" id="top-menu">
                                <a href="#7" class="list-group-item bg-secondary text-white">Title will be 7</a>
                                <a href="#8" class="list-group-item">Title will be 8</a>
                                <a href="#9" class="list-group-item">Title will be 9</a>
                                <a href="#10" class="list-group-item">Title will be 10</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-xlg-10 col-md-8">
                        <div class="card">
                            <div class="card-body">    
                              <!-- photo section starts here -->
                              <h3>Your Ride Booking</h3>
                              <br>
                                  <table class="table">
              <thead>
                <tr>
                  <th>User</th>
                  <th>Departure</th>
                  <th>Arrival</th>
                  <th>Fare</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

                  @foreach($get as $info)
                <tr>
                  <td>{{$info->user->username}}</td>
                  <td>{{$info->Departure}}</td>
                  <td>{{$info->Arrival}}</td>
                  <td>{{$info->Fare}}</td>
                  <td>   
                      @if($info->is_confirm=='No')
                    <button type="button" class="btn waves-effect waves-light  btn-danger bsutton-confirm" data-id="{{$info->id}}" rel="tooltip" title="Not Confirm"><i class="fa fa-ban" ></i></button>
                     @else
                <button type="button" class="btn waves-effect waves-light  btn-primary " data-id="{{$info->id}}" rel="tooltip" title="Confirm"><i class="fa fa-check-circle" ></i></button>

                                              @endif
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>

                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
               
 </section>
@include('partials.footer')
@endsection