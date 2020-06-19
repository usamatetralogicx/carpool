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
                               <h4 class="card-title m-t-40" id="2">1.Phone Verification</h4>
                                <p class="small">Verify your profile to become a trusted member of our community and easily find others to travel with!</p>
                                <!-- Email address -->
                                <div class="border border-secondary ">
                                    <h5 class="ml-3 mt-3">  <i class="fa fa-exclamation-circle" style="color: orange;"></i> Please verify your email address</h5>
                                    <div class="row col-md-12 ">
                                        <div class="col-md-8 pb-3">
                                            Your email address is: hamato739@gmail.com <a href="#" style="color: blue;"><u>Edit</u></a><br>
                                                 Having a verified email address means we can contact you if needed.
                                        </div>
                                            <div class="col-md-4">
                                                <button type="button" class="btn btn-primary btn-block">Verify email</button>
                                            </div>

                                    </div>
                                </div>

                                <!-- Phone Number -->
                                <div class="border border-secondary mt-4">
                                    <h5 class="ml-3 mt-3">  <i class="fa fa-exclamation-circle" style="color: orange;"></i> Please add your phone number</h5>
                                    <div class="row col-md-12 ">
                                        <div class="col-md-8 pb-3">
                                            Add a phone number so you can verify it.,<br>
                                            Adding your phone number means you'll be able to arrange your rides more easily.
                                        </div>
                                            <div class="col-md-4">
                                                <button type="button" class="btn btn-primary btn-block">Add My Phone</button>
                                            </div>
                                    </div>
                                </div>

                                <!-- GOvt id -->

                                <div class="border border-secondary mt-4">
                                    <h5 class="ml-3 mt-3">  <i class="fa fa-exclamation-circle" style="color: orange;"></i> Please verify your Govt. ID</h5>
                                    <div class="row col-md-12 ">
                                        <div class="col-md-8 pb-3">
                                            Other members will be more likely to choose to travel with you!
                                        </div>
                                            <div class="col-md-4 mb-5">
                                                <button type="button" class="btn btn-primary btn-block">Verify my Govt id</button>
                                            </div>
                                    </div>
                                </div>


                                <!-- Facebook account -->

                                <div class="border border-secondary mt-4">
                                    <h5 class="ml-3 mt-3">  <i class="fa fa-exclamation-circle" style="color: orange;"></i> Please connect your Facebook account</h5>
                                    <div class="row col-md-12  ">
                                        <div class="col-md-8 pb-3">
                                            Connect your account so other members can see how many Facebook friends you have, and build trust on your profile.
                                        </div>
                                            <div class="col-md-4 mb-5">
                                                <button type="button" class="btn btn-info btn-block" style=""><i class="fa fa-facebook"></i>&nbsp &nbspConnect my account</button>
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