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
                    <li><span class="page-title">Our Taxies</span></li>
                </ul><!-- /.thm-breadcrumb -->
                <h2>Our Taxies</h2>
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        <section class="taxi-style-one taxi-page">
            <div class="container">
                <ul class="nav nav-tabs tab-title" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#hybrid" role="tab" data-toggle="tab">hybrid taxi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#town" role="tab" data-toggle="tab">town taxi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#limousine" role="tab" data-toggle="tab">LIMOUSINE taxi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#suv" role="tab" data-toggle="tab">suv taxi</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane show active  animated fadeInUp" id="hybrid">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
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
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="single-taxi-one">
                                    <div class="inner-content">
                                        <img src="{{url('/')}}/assests/images/pricing/pricing-1-2.png" alt="Awesome Image" />
                                        <div class="icon-block">
                                            <i class="conexi-icon-mercedes-benz"></i>
                                        </div><!-- /.icon-block -->
                                        <h3>E Class 2010 Model</h3>
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
                            <div class="col-lg-4 col-md-6 col-sm-12">
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
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="single-taxi-one">
                                    <div class="inner-content">
                                        <img src="{{url('/')}}/assests/images/pricing/pricing-1-4.png" alt="Awesome Image" />
                                        <div class="icon-block">
                                            <i class="conexi-icon-audi"></i>
                                        </div><!-- /.icon-block -->
                                        <h3>S3 2016 Model</h3>
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
                            <div class="col-lg-4 col-md-6 col-sm-12">
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
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="single-taxi-one">
                                    <div class="inner-content">
                                        <img src="{{url('/')}}/assests/images/pricing/pricing-1-6.png" alt="Awesome Image" />
                                        <div class="icon-block">
                                            <i class="conexi-icon-honda"></i>
                                        </div><!-- /.icon-block -->
                                        <h3>Civic 2014 Model</h3>
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
                    </div>
                    <div role="tabpanel" class="tab-pane animated fadeInUp" id="town">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
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
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="single-taxi-one">
                                    <div class="inner-content">
                                        <img src="{{url('/')}}/assests/images/pricing/pricing-1-2.png" alt="Awesome Image" />
                                        <div class="icon-block">
                                            <i class="conexi-icon-mercedes-benz"></i>
                                        </div><!-- /.icon-block -->
                                        <h3>E Class 2010 Model</h3>
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
                            <div class="col-lg-4 col-md-6 col-sm-12">
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
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="single-taxi-one">
                                    <div class="inner-content">
                                        <img src="{{url('/')}}/assests/images/pricing/pricing-1-4.png" alt="Awesome Image" />
                                        <div class="icon-block">
                                            <i class="conexi-icon-audi"></i>
                                        </div><!-- /.icon-block -->
                                        <h3>S3 2016 Model</h3>
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
                            <div class="col-lg-4 col-md-6 col-sm-12">
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
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="single-taxi-one">
                                    <div class="inner-content">
                                        <img src="{{url('/')}}/assests/images/pricing/pricing-1-6.png" alt="Awesome Image" />
                                        <div class="icon-block">
                                            <i class="conexi-icon-honda"></i>
                                        </div><!-- /.icon-block -->
                                        <h3>Civic 2014 Model</h3>
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
                    </div>
                    <div role="tabpanel" class="tab-pane animated fadeInUp" id="limousine">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
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
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="single-taxi-one">
                                    <div class="inner-content">
                                        <img src="{{url('/')}}/assests/images/pricing/pricing-1-2.png" alt="Awesome Image" />
                                        <div class="icon-block">
                                            <i class="conexi-icon-mercedes-benz"></i>
                                        </div><!-- /.icon-block -->
                                        <h3>E Class 2010 Model</h3>
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
                            <div class="col-lg-4 col-md-6 col-sm-12">
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
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="single-taxi-one">
                                    <div class="inner-content">
                                        <img src="{{url('/')}}/assests/images/pricing/pricing-1-4.png" alt="Awesome Image" />
                                        <div class="icon-block">
                                            <i class="conexi-icon-audi"></i>
                                        </div><!-- /.icon-block -->
                                        <h3>S3 2016 Model</h3>
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
                            <div class="col-lg-4 col-md-6 col-sm-12">
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
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="single-taxi-one">
                                    <div class="inner-content">
                                        <img src="{{url('/')}}/assests/images/pricing/pricing-1-6.png" alt="Awesome Image" />
                                        <div class="icon-block">
                                            <i class="conexi-icon-honda"></i>
                                        </div><!-- /.icon-block -->
                                        <h3>Civic 2014 Model</h3>
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
                    </div>
                    <div role="tabpanel" class="tab-pane animated fadeInUp" id="suv">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
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
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="single-taxi-one">
                                    <div class="inner-content">
                                        <img src="{{url('/')}}/assests/images/pricing/pricing-1-2.png" alt="Awesome Image" />
                                        <div class="icon-block">
                                            <i class="conexi-icon-mercedes-benz"></i>
                                        </div><!-- /.icon-block -->
                                        <h3>E Class 2010 Model</h3>
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
                            <div class="col-lg-4 col-md-6 col-sm-12">
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
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="single-taxi-one">
                                    <div class="inner-content">
                                        <img src="{{url('/')}}/assests/images/pricing/pricing-1-4.png" alt="Awesome Image" />
                                        <div class="icon-block">
                                            <i class="conexi-icon-audi"></i>
                                        </div><!-- /.icon-block -->
                                        <h3>S3 2016 Model</h3>
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
                            <div class="col-lg-4 col-md-6 col-sm-12">
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
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="single-taxi-one">
                                    <div class="inner-content">
                                        <img src="{{url('/')}}/assests/images/pricing/pricing-1-6.png" alt="Awesome Image" />
                                        <div class="icon-block">
                                            <i class="conexi-icon-honda"></i>
                                        </div><!-- /.icon-block -->
                                        <h3>Civic 2014 Model</h3>
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
                    </div>
                </div><!-- /.tab-content -->
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
@include('partials.footer')
@endsection