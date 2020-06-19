@extends('layouts.app')
@section('content')


@include('partials.header')
@push('styles')
<style>
.contact-form-style-one textarea {
    border-radius: 50px;
    height: 182px;
    padding-top: 30px;
    background-color: #F3F3F3;
    padding-left: 40px;
    color:#717171;
    font-size: 14px;
font-weight: 600;
display: block;
}
</style>
@endpush
<section class="inner-banner">
            <div class="container">
                
                <h2 class="text-center" style="color: white">Contact Page </h2>
            </div><!-- /.container -->
        </section>
<section class="contact-form-style-one  book-ride-two ">
    <div class="container ">
        <div class="block-title text-center">
            <div class="dot-line"></div><!-- /.dot-line -->
            <p>Contact with us now</p>
                    <h2>Leave a message</h2>
        </div><!-- /.block-title -->
        <form action="" class="contact-form-one row booking-form-two  " id="     
            contact-form" method="post">
            <div class="col-lg-6">
                <div class="input-holder">
                    <input class="form-control" type="email text" name="form_username" placeholder="Your name">
                </div><!-- /.input-holder -->
            </div><!-- /.col-lg-6 -->
             <div class="col-lg-6">
                <div class="input-holder">
                    <input class="form-control" type="email text" name="form_email" placeholder="Your email">
                </div><!-- /.input-holder -->
            </div> <div class="col-lg-6">
                <div class="input-holder">
                    <input class="form-control" type="email text" name="form_phone" placeholder="Phone">
                </div><!-- /.input-holder -->
            </div>
            <div class="col-lg-6">
                <div class="input-holder">
                    <input class="form-control" type="text" name="form_subject" placeholder="Subject">
                </div><!-- /.input-holder -->
            </div>
           
            <div class="col-lg-12">
                        <div class="input-holder">
                            <textarea class="form-control" name="form_message" placeholder="Write message"></textarea>
                        </div><!-- /.input-holder -->
                    </div><!-- /.col-lg-6 -->


            

            

            <div class="col-md-12">
                <div class="input-holder text-center">
                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                    <a href="{{url('/#')}}"><button class="theme-btn btn-style-two" type="submit" data-loading-text="Please wait..."><span>Send Message</span></button></a>
                </div><!-- /.input-holder -->
            </div>
           
        </form><!-- /.contact-form-one -->
    </div><!-- /.container -->
    
</section>
@include('partials.footer')
@endsection