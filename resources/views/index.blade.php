@extends('layouts.app')
@section('content')
@include('partials.header')
<div class="page-wrapper">
       <!-- /.site-header header-one -->
        <div class="main-banner-wrapper">
            <section class="banner-style-one owl-theme owl-carousel no-dots">
                <!-- @include('sweet::alert') -->
                <div class="slide slide-one" style="background-image: url({{url('/')}}/assests/images/slider/slider-1-1.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h3 class="banner-title">Cheap & Trusted <br> Car Company</h3>
                                <p>Enjoy your comfortable trip with <br> carpool company taxi</p>
                                <!-- <div class="btn-block">
                                    <a href="#" class="banner-btn">Learn More</a>
                                </div> --><!-- /.btn-block -->
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.slide -->
                <div class="slide slide-two" style="background-image: url({{url('/')}}/assests/images/slider/slider-1-2.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h3 class="banner-title">Cheap & Trusted <br> CAr Company</h3>
                                <p>Enjoy your comfortable trip with <br> carpool company taxi</p>
                                <!-- <div class="btn-block">
                                    <a href="#" class="banner-btn">Learn More</a>
                                </div> --><!-- /.btn-block -->
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.slide -->
            </section><!-- /.banner-style-one -->
            <div class="carousel-btn-block banner-carousel-btn">
                <span class="carousel-btn left-btn"><i class="conexi-icon-left"></i></span>
                <span class="carousel-btn right-btn"><i class="conexi-icon-right"></i></span>
            </div><!-- /.carousel-btn-block banner-carousel-btn -->
        </div><!-- /.main-banner-wrapper -->
                
        <section class="about-style-one ">
            <div class="container">
                <div class="block-title text-center">
                    <div class="dot-line"></div><!-- /.dot-line -->
                    <p>Welcome to conexi company</p>
                    <h2>Your first choice <br> for traveling anywhere</h2>
                </div><!-- /.block-title -->
                <div class="row high-gutter">
                    <div class="col-lg-6">
                        <div class="about-image-block">
                            <img src="{{url('/')}}/assests/images/resources/choise-1-1.png" alt="Awesome Image" />
                            <p>There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form by injected humour or random words which don't look even slightly believable. If you are going to use a passage of lorem ipsum you need to be sure there isn't anything embarrassing.</p>
                        </div><!-- /.image-block -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="text-block">
                            <div class="video-block-one">
                                <div class="image-block">
                                    <div class="inner-block">
                                        <img src="{{url('/')}}/assests/images/resources/video-1-1.png" alt="Awesome Image" />
                                        <a href="https://www.youtube.com/watch?v=hsb-fA6ApiE" class="video-popup"><i class="fa fa-play"></i></a>
                                    </div><!-- /.inner-block -->
                                </div><!-- /.image-block -->
                                <div class="content-block">
                                    <h3>We’re specialized in providing a high quality service</h3>
                                </div><!-- /.content-block -->
                            </div><!-- /.video-block-one -->
                            <p>There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form by injected humour or random words which don't look even slightly believable. If you are going to use a passage of lorem ipsum you need to be sure there isn't anything embarrassing.</p>
                            <hr class="style-one">
                            <div class="call-block">
                                <div class="left-block">
                                    <div class="icon-block">
                                        <i class="conexi-icon-phone-call"></i>
                                    </div><!-- /.icon-block -->
                                    <div class="content-block">
                                        <p>Call us now and make <br>your booking</p>
                                    </div><!-- /.content-block -->
                                </div><!-- /.left-block -->
                                <div class="right-block">
                                    <a class="phone-number" href="callto:888-888-0000">888 888 0000</a>
                                </div><!-- /.right-block -->
                            </div><!-- /.call-block -->
                        </div><!-- /.text-block -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-style-one -->
        <section class="funfact-style-one">
            <div class="container">
                <div class="block-title text-center">
                    <div class="dot-line"></div><!-- /.dot-line -->
                    <p>Our fun facts</p>
                    <h2>Numbers speak</h2>
                </div><!-- /.block-title text-center -->
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-funfact-one hvr-float-shadow">
                            <i class="conexi-icon-meter"></i>
                            <h3 class="counter">8700</h3>
                            <p>KM Driven</p>
                        </div><!-- /.single-funfact-one -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-funfact-one hvr-float-shadow">
                            <i class="conexi-icon-team"></i>
                            <h3 class="counter">4978</h3>
                            <p>People Dropped</p>
                        </div><!-- /.single-funfact-one -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-funfact-one hvr-float-shadow">
                            <i class="conexi-icon-taxi"></i>
                            <h3 class="counter">800</h3>
                            <p>Taxis & Drivers</p>
                        </div><!-- /.single-funfact-one -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-funfact-one hvr-float-shadow">
                            <i class="conexi-icon-happy"></i>
                            <h3 class="counter">2480</h3>
                            <p>Happy People</p>
                        </div><!-- /.single-funfact-one -->
                    </div><!-- /.col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.funfact-style-one -->
        <section class="cta-style-two">
            <div class="container">
                <div class="content-block">
                     <h3>Driving in your car soon?
</h3>       
                    <small>Let's make this your least expensive journey ever.</small>
                   
                </div><!-- /.content-block -->
                <div class="button-block">
                    <a href="{{url('offer-ride')}}" class="cta-btn">Offer a Ride</a>
                </div><!-- /.button-block -->
            </div><!-- /.container -->
        </section><!-- /.cta-style-two -->
       <!-- /.taxi-style-one -->
        <hr class="style-one">
        <section class="feature-style-one thm-black-bg">
            <img src="{{url('/')}}/assests/images/background/feature-bg-1-1.png" alt="Awesome Image" class="feature-bg" />
            <div class="container">
                <div class="block-title text-center">
                    <div class="dot-line"></div><!-- /.dot-line -->
                    <p>Conexi benefit list</p>
                    <h2 class="light">Why choose us</h2>
                </div><!-- /.block-title text-center -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-feature-one">
                            <div class="icon-block">
                                <i class="conexi-icon-insurance"></i>
                            </div><!-- /.icon-block -->
                            <h3><a href="#">Safety Guarantee</a></h3>
                            <p>Lorem ipsum dolor sit amet <br> cons adipisci elit vehicula est <br> non lac at quam.</p>
                            <a href="#" class="more-link">Read More</a>
                        </div><!-- /.single-feature-one -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="single-feature-one">
                            <div class="icon-block">
                                <i class="conexi-icon-seatbelt"></i>
                            </div><!-- /.icon-block -->
                            <h3><a href="#">DBS Cleared Drivers</a></h3>
                            <p>Lorem ipsum dolor sit amet <br> cons adipisci elit vehicula est <br> non lac at quam.</p>
                            <a href="#" class="more-link">Read More</a>
                        </div><!-- /.single-feature-one -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="single-feature-one">
                            <div class="icon-block">
                                <i class="conexi-icon-consent"></i>
                            </div><!-- /.icon-block -->
                            <h3><a href="#">Free Quotation</a></h3>
                            <p>Lorem ipsum dolor sit amet <br> cons adipisci elit vehicula est <br> non lac at quam.</p>
                            <a href="#" class="more-link">Read More</a>
                        </div><!-- /.single-feature-one -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.feature-style-one -->
       
       
        <section class="cta-style-one text-center">
            <div class="container">
                <p>Call 24 hour service available</p>
                <h3>Call now and book <br> our taxi for your next ride</h3>
                <a href="{{url('/book-ride')}}" class="cta-btn">Choose Your Taxi</a>
            </div><!-- /.container -->
        </section><!-- /.cta-style-one -->
        @include('partials.footer')<!-- /.site-footer -->
    </div><!-- /.page-wrapper -->
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
@endsection