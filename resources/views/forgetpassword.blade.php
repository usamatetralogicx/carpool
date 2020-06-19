@extends('layouts.app')
@section('content')


@include('partials.header')
<section class="inner-banner">
            <div class="container">
                       <h2 class="text-center" style="color: white">Forgot Password Page </h2>

            </div><!-- /.container -->
        </section>
<section class="contact-form-style-one  book-ride-two ">
    <div class="container ">
        <div class="block-title text-center">
            <div class="dot-line"></div><!-- /.dot-line -->
            <p>Welcome Back !</p>
        </div><!-- /.block-title -->
        <form action="{{url('sendpasswordtoken')}}" class="contact-form-one row booking-form-two  " id="     
		    contact-form" method="post">
            @csrf
            <div class="col-lg-6 offset-lg-3">
               <h3><label class="ml-3">Email:</label><h3>

                <div class="input-holder">
                    <input class="form-control" type="email text" name="email" placeholder="Enter your Email">
                </div><!-- /.input-holder -->
            </div><!-- /.col-lg-6 -->
            
            <div class="col-md-12">
                <div class="input-holder text-center">
                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                    <button class="theme-btn btn-style-two" type="submit" data-loading-text="Please wait..."><span>Continue</span></button>
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