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
                                <a  class="list-group-item bg-secondary text-white">Account</a>
                                <a href="{{url('transactions')}}" class="list-group-item">Completed transactions</a>
                                <a href="{{url('new_password')}}" class="list-group-item">Passwords</a>
                                <a href="{{url('close_account')}}" class="list-group-item">Close my account</a>
                            </div>
                              <!-- <div class="list-group mt-3" id="top-menu">
                                <a href="#7" class="list-group-item bg-secondary text-white">Title will be 7</a>
                                <a href="#8" class="list-group-item">Title will be 8</a>
                                <a href="#9" class="list-group-item">Title will be 9</a>
                                <a href="#10" class="list-group-item">Title will be 10</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-9 col-xlg-10 col-md-8">
                        <div class="card">
                            <div class="card-body">    
                              <!-- photo section starts here -->
                               <h4 class="card-title m-t-40" id="5">4. Your car details</h4>
<!-- car section starts here -->
<div class="row col-md-12">
  <h2 class="text-center col-md-12">What's your number plate?</h2>
  <div class="row col-md-12 ">
    <div class="col-md-2">
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card card-outline-info">
          <div class="card-body">
            <form action="{{url('post')}}" method="post">
              @csrf
              <div class="form-body">
                <h3 class="card-title">We’ll only share it with passengers who book with you.</h3>
                <hr>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Country:</label>
                    <select class="form-control custom-select" name="country">
                      <option>--Select your Country--</option>
                      <option>India</option>
                      <option>Sri Lanka</option>
                      <option>USA</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Plate Number:</label>>
                    <input type="text" name="number_plate" value="" placeholder="Plate Number" class="form-control">
                  </div>
              
                <div class="form-row">
                  <div class="col-md-6">
                    <div class="form-group">
                    <label>Company:</label>
                    <select class="form-control custom-select" name="company">
                      <option>--Select your Company--</option>
                      <option>MARUTI</option>
                      <option>HYUNDAI</option>
                      <option>HONDA</option>
                      <option>FORD</option>
                      <option>TATA</option>
                    </select>                   
                     </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                    <label>Model:</label>
                    <select class="form-control custom-select" name="model">
                      <option>--Select your Model--</option>
                      <option>SWIFT</option>
                      <option>WAGRON R</option>
                      <option>SWIFT DZIRE</option>
                      <option>ALTO 800</option>
                    </select>
                    </div>
                  </div>
                </div>
                  <div class="form-row">
                  <div class="col-md-6">
                    <div class="form-group">
                    <label>What type of car is it:</label>
                    <select class="form-control custom-select" name="car_type">
                      <option>--Select your car type--</option>
                      <option>Hatchback</option>
                      <option>Sedan</option>
                      <option>Convertible</option>
                      <option>Estate</option>
                      <option>Suv</option>
                      <option>Station wagon</option>
                    </select>                   
                     </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                    <label>What color is it:</label>
                    <select class="form-control custom-select" name="color">
                      <option>--Select your car color--</option>
                      <option>Black</option>
                      <option>White</option>
                      <option>Dark grey</option>
                      <option>Red</option>
                      <option>Blue</option>
                      <option>Dark blue</option>
                      <option>Green</option>
                      <option>Brown</option>
                      <option>Orange</option>
                      <option>Pink</option>
                      <option>Purple</option>
                      <option>Biege</option>
                    </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <label>What year was it registered?</label>
                    <input type="text" name="register" class="form-control" value="" placeholder="">
                  </div>
                </div>
              </div>
                <div class="row">
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-4">
                    <button type="submit" class="btn btn-secondary btn-block">Continue</button>
                  </div>
                  
                </div>
              </div>
              <!--/span-->
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

                                <!-- photo section ends here -->
                              
                                <!-- car section starts here -->
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
               
 </section>
@include('partials.footer')
@endsection