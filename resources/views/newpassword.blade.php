@extends('layouts.app')
@section('content')


@include('partials.header')
<section class="inner-banner">
            <div class="container">
               
                              <h2 class="text-center" style="color: white">Login Page </h2>

            </div><!-- /.container -->
        </section>
<section class="contact-form-style-one  book-ride-two ">
    <div class="container ">
        <div class="block-title text-center">
            <div class="dot-line"></div><!-- /.dot-line -->
            <p>Welcome Back !</p>
            <h2>Enter Your Credentials</h2>
        </div><!-- /.block-title -->
        <form action="{{url('updatepassword')}}" class="contact-form-one row booking-form-two  " id="     
		    contact-form" method="post">
            @csrf
            <div class="col-lg-12">
                <div class="input-holder">
                    <h3><label class="ml-3">Email:</label>
                    </h3>
                    <input class="form-control" type="email text" name="email" placeholder="Email or Phone">
                </div><!-- /.input-holder -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-12">
                <div class="input-holder">
                    <h3><label class="ml-3">Enter New Password:</label>
                    </h3>
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div><!-- /.input-holder -->
            </div>
            <div class="col-lg-12">
                <div class="input-holder">
                    <h3><label class="ml-3">Confirm Password:</label>
                    </h3>
                    <input class="form-control" type="password" name="c_password" placeholder="Password">
                </div><!-- /.input-holder -->
            </div>
            <div class="col-md-12">
                <div class="input-holder text-center">
                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                    <a href="{{url('/#')}}"><button class="theme-btn btn-style-two" type="submit" data-loading-text="Please wait..."><span>Submit</span></button></a>
                </div><!-- /.input-holder -->
            </div>

            <div class="col-md-12 text-center">
                <p>© 2020 DGTM Crafted with <i class="mdi mdi-heart text-danger"></i> by DGTM</p>
            </div><!-- /.col-lg-6 -->
        </form><!-- /.contact-form-one -->
    </div><!-- /.container -->
    
</section>
@include('partials.footer')
@endsection