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
        <form action="{{'Login'}}" class="contact-form-one row booking-form-two  " id="     
		    contact-form" method="post">
            @csrf
            <div class="col-lg-12">
                <div class="input-holder">
                    <input class="form-control" type="email text" name="email" placeholder="Email or Phone">
                </div><!-- /.input-holder -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-12">
                <div class="input-holder">
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div><!-- /.input-holder -->
            </div>


            <div class="col-md-3 offset-md-3 text-center form-group ">
                    <ul class="special-checkbox">
                                <li>
                                    <span class="input-checker">
                                        <input type="checkbox" name="rem-me" value="">
                                    </span>Remember me
                                </li>
                            </ul>
             </div>
			<div class="form-group ">
                <div class="col-md-12">
                    <a href="{{url('forgot')}}"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                </div>
            </div>

            

            <div class="col-md-12">
                <div class="input-holder text-center">
                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                    <a href="{{url('/#')}}"><button class="theme-btn btn-style-two" type="submit" data-loading-text="Please wait..."><span>LOGIN</span></button></a>
                </div><!-- /.input-holder -->
            </div>
            <div class="text-center col-lg-12 mt-2">
				<div class="login-section text-center">
					<div class="social-media">
						<a  href="{{url('/redirect')}}"><i class="fa fa-facebook fa-2x col-md-1" data-toggle="tooltip" title="Login with Facebook"></i></a>
						<a href="{{url('/redirect/google')}}"><i class="fa fa-google fa-2x" style="color: red" data-toggle="tooltip" title="Login with Google"></i></a>
					</div>
					
				</div>
			</div>
            <div class="col-md-12 text-center">
                <p>Don't have an account ? <a href="{{url('/sign-up')}}" class="font-500 text-warning"> Signup now </a> </p>
                <p>© 2020 DGTM Crafted with <i class="mdi mdi-heart text-danger"></i> by DGTM</p>
            </div><!-- /.col-lg-6 -->
        </form><!-- /.contact-form-one -->
    </div><!-- /.container -->
    
</section>
@include('partials.footer')
@endsection