@extends('layouts.app')
@section('content')


@include('partials.header')
<section class="inner-banner">
            <div class="container">
                
                <h2 class="text-center" style="color: white">SignUp Page</h2>
            </div><!-- /.container -->
        </section>
<section class="contact-form-style-one  book-ride-two ">
    <div class="container ">
        <div class="block-title text-center">
            <div class="dot-line"></div><!-- /.dot-line -->
            <p>Sign Up</p>
            <h2>Create Your Account</h2>
        </div><!-- /.block-title -->
        @if(Session::has('email_confirmation'))
<p class="alert alert-info">{{ Session::get('email_confirmation') }}</p>
@endif
        <form action="{{url('signup')}}" class="contact-form-one row booking-form-two" id="
            contact-form" method="post">
            @csrf
            <input type="hidden" name="image">
            <div class="col-lg-12">
                <div class="input-holder">
                    <input class="form-control" type="text" name="username" placeholder="Username"  value="{{old('username')}}">
                </div><!-- /.input-holder -->
                    @if($errors->has('username'))
                    <div class="alert alert-danger">
                        {{ $errors->first('username') }}</div>
                    @endif
            </div><!-- /.col-lg-6 -->
             <div class="col-lg-12">
                <div class="input-holder">
                    <input class="form-control" type="email text" name="email" placeholder="Email" value="{{old('email')}}">
                </div><!-- /.input-holder -->
                   @if($errors->has('email'))
                    <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                    @endif
            </div> 
            <div class="col-lg-12">
                <div class="input-holder">
                    <input class="form-control" type="text" name="phone" placeholder="Phone" value="{{old('phone')}}">
                </div><!-- /.input-holder -->
                   @if($errors->has('phone'))
                    <div class="alert alert-danger">{{ $errors->first('phone') }}</div>
                    @endif
            </div>
            <div class="col-lg-12">
                <div class="input-holder">
                    <input class="form-control" type="text" name="dob" placeholder="DOB" value="{{old('dob')}}">
                </div><!-- /.input-holder -->
                   @if($errors->has('dob'))
                    <div class="alert alert-danger">{{ $errors->first('dob') }}</div>
                    @endif
            </div>
             <div class="col-lg-12 booking-form-two">
                                    <div class="input-holder">
                                        <select class="selectpicker" name="gender">
                                            <option>-- Select Gender --</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                        <i class="fa fa-angle-down select-icon"></i>
                                    </div><!-- /.input-holder -->
                                       @if($errors->has('gender'))
                    <div class="alert alert-danger">{{ $errors->first('gender') }}</div>
                    @endif
                                </div>
        <div class="col-lg-12">
        <div class="input-holder">
            <input class="form-control" type="text" name="country" placeholder="Enter Country" value="{{old('country')}}">
            </div><!-- /.input-holder -->
               @if($errors->has('country'))
                    <div class="alert alert-danger">{{ $errors->first('country') }}</div>
                    @endif
        </div>
                                 <div class="col-lg-12">
                <div class="input-holder">
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div><!-- /.input-holder --> 
                   @if($errors->has('password'))
                    <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                    @endif
            </div>
            <div class="col-lg-12">
                <div class="input-holder">
                    <input class="form-control" type="password" name="confirmpassword" placeholder="Confirm Password">
                </div><!-- /.input-holder -->
                   @if($errors->has('confirmpassword'))
                    <div class="alert alert-danger">
                        {{ $errors->first('confirmpassword') }}</div>
                    @endif
            

            <div class="col-md-12">
                <div class="input-holder text-center">
                   
                    <button class="theme-btn btn-style-two" type="submit" data-loading-text="Please wait..."><span>Submit</span></button>
                </div><!-- /.input-holder -->
            </div>
             </form>
            <div class="text-center col-lg-12 mt-2">
                <div class="login-section text-center">
                    <div class="social-media">
                        <a href="{{url('/#')}}"><i class="fa fa-facebook fa-2x col-md-1"></i></a>
                        
                        <a href="{{url('/#')}}"><i class="fa fa-google fa-2x" style="color: red"></i></a>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-12 text-center">
                <p>Already have an account ? <a href="{{url('/login')}}" class="font-500 text-warning"> Login now </a> </p>
                <p>© 2020 GDTM Crafted with <i class="mdi mdi-heart text-danger"></i> by DGTM</p>
            </div><!-- /.col-lg-6 -->
       <!-- /.contact-form-one -->
    </div><!-- /.container -->
    
</section>
@include('partials.footer')
@endsection