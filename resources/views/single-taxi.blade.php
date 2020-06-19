@extends('layouts.app')
@section('content')
@include('partials.header')
<div class="page-wrapper">
        <!-- /.site-header header-one -->
        <section class="inner-banner">
            <div class="container">
                <ul class="thm-breadcrumb">
                    <li><a href="index-2.html">Home</a></li>
                    <li><span class="sep">.</span></li>
                    <li><span class="page-title">Our Taxis</span></li>
                </ul><!-- /.thm-breadcrumb -->
                <h2>E Class 2010 Model</h2>
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        <section class="single-taxi-details-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="image-block">
                            <img src="{{url('/')}}/assests/images/resources/single-taxi-1-1.jpg" alt="Awesome Image"/>
                            <div class="icon-block">
                                <i class="conexi-icon-mercedes-benz"></i>
                            </div><!-- /.icon-block -->
                        </div><!-- /.image-block -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="content-block">
                            <div class="block-title">
                                <div class="dot-line"></div><!-- /.dot-line -->
                                <p>Corporate taxi service</p>
                                <h2>Mercedes benz taxi</h2>
                            </div><!-- /.block-title -->
                            <p>There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some.</p>
                            <hr class="style-one" />
                            <div class="row">
                                <div class="col-lg-8">
                                    <ul class="features-list">
                                        <li>
                                            <span class="name-line">Model::</span>
                                            <span class="price-line">E Class 2010 Model</span>
                                        </li>
                                        <li>
                                            <span class="name-line">Base Rate:</span>
                                            <span class="price-line">$4.30</span>
                                        </li>
                                        <li>
                                            <span class="name-line">Per Mile/KM:</span>
                                            <span class="price-line">$2.00</span>
                                        </li>
                                        <li>
                                            <span class="name-line">Passengers:</span>
                                            <span class="price-line">4</span>
                                        </li>
                                        <li>
                                            <span class="name-line">Luggage::</span>
                                            <span class="price-line">2</span>
                                        </li>
                                    </ul><!-- /.feature-list -->
                                </div><!-- /.col-lg-7 -->
                            </div><!-- /.row -->
                            <a href="#" class="book-btn">Book Taxi</a>
                        </div><!-- /.content-block -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.single-taxi-details-one -->
        <section class="single-taxi-faq-one thm-gray-bg">
            <div class="container">
                <div class="block-title text-center">
                    <div class="dot-line"></div><!-- /.dot-line -->
                    <p>Our faqs</p>
                    <h2>Questions & answers</h2>
                </div><!-- /.block-title -->
                <div class="accrodion-grp" data-grp-name="faq-accrodion">
                    <div class="accrodion active">
                        <div class="accrodion-title">
                            <h4>Can i make advance payment to book taxi?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion ">
                        <div class="accrodion-title">
                            <h4>How much luxury taxi rates per minute?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <h4>Is there any surcharge for mercedez benz?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <h4>How much you charge for one hour wait?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </section><!-- /.single-taxi-faq-one -->
        <section class="taxi-style-one">
            <div class="container">
                <div class="block-title text-center">
                    <div class="dot-line"></div><!-- /.dot-line -->
                    <p>Our best cars</p>
                    <h2>Similar taxis</h2>
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-taxi-one">
                            <div class="inner-content">
                                <img src="{{url('/')}}/assests/images/pricing/pricing-1-1.png" alt="Awesome Image" />
                                <div class="icon-block">
                                    <i class="conexi-icon-bmw"></i>
                                </div><!-- /.icon-block -->
                                <h3>M5 2008 Model</h3>
                                <ul class="feature-list">
                                    <li>
                                        <span class="name-line">Base Rate:</span>
                                        <span class="price-line">$4.30</span>
                                    </li>
                                    <li>
                                        <span class="name-line">Per Mile/KM:</span>
                                        <span class="price-line">$2.00</span>
                                    </li>
                                    <li>
                                        <span class="name-line">Passengers:</span>
                                        <span class="price-line">4</span>
                                    </li>
                                </ul><!-- /.feature-list -->
                                <a href="single-taxi.html" class="book-taxi-btn">Book Taxi</a>
                            </div><!-- /.inner-content -->
                        </div><!-- /.single-taxi-one -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="single-taxi-one">
                            <div class="inner-content">
                                <img src="{{url('/')}}/assests/images/pricing/pricing-1-5.png" alt="Awesome Image" />
                                <div class="icon-block">
                                    <i class="conexi-icon-chevrolet"></i>
                                </div><!-- /.icon-block -->
                                <h3>Bolt EV 2006 Model</h3>
                                <ul class="feature-list">
                                    <li>
                                        <span class="name-line">Base Rate:</span>
                                        <span class="price-line">$4.30</span>
                                    </li>
                                    <li>
                                        <span class="name-line">Per Mile/KM:</span>
                                        <span class="price-line">$2.00</span>
                                    </li>
                                    <li>
                                        <span class="name-line">Passengers:</span>
                                        <span class="price-line">4</span>
                                    </li>
                                </ul><!-- /.feature-list -->
                                <a href="single-taxi.html" class="book-taxi-btn">Book Taxi</a>
                            </div><!-- /.inner-content -->
                        </div><!-- /.single-taxi-one -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="single-taxi-one">
                            <div class="inner-content">
                                <img src="{{url('/')}}/assests/images/pricing/pricing-1-3.png" alt="Awesome Image" />
                                <div class="icon-block">
                                    <i class="conexi-icon-toyota"></i>
                                </div><!-- /.icon-block -->
                                <h3>Yaris 2014 Model</h3>
                                <ul class="feature-list">
                                    <li>
                                        <span class="name-line">Base Rate:</span>
                                        <span class="price-line">$4.30</span>
                                    </li>
                                    <li>
                                        <span class="name-line">Per Mile/KM:</span>
                                        <span class="price-line">$2.00</span>
                                    </li>
                                    <li>
                                        <span class="name-line">Passengers:</span>
                                        <span class="price-line">4</span>
                                    </li>
                                </ul><!-- /.feature-list -->
                                <a href="single-taxi.html" class="book-taxi-btn">Book Taxi</a>
                            </div><!-- /.inner-content -->
                        </div><!-- /.single-taxi-one -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.taxi-style-one -->
        <section class="cta-style-one text-center">
            <div class="container">
                <p>Call 24 hour service available</p>
                <h3>Call now and book <br> our taxi for your next ride</h3>
                <a href="taxi.html" class="cta-btn">Choose Your Taxi</a>
            </div><!-- /.container -->
        </section><!-- /.cta-style-one -->
       <!-- /.site-footer -->
    </div>


@ainclude('partials.footer')
@endsection