
<header class="site-header header-one">
            <div class="top-bar">
                <div class="container">
                    <div class="left-block">
                        <a href="{{url('/login')}}"><i class="fa fa-user-circle"></i> Login</a>
                        <a href="#"><i class="fa fa-envelope"></i> needhelp@carpool.com</a>
                    </div><!-- /.left-block -->
                    <div class="logo-block">
                        <a href="{{url('/')}}"><img src="{{url('/')}}/assests/images/resources/preloader2.png" alt="Awesome Image" /></a>
                    </div><!-- /.logo-block -->
                    <div class="social-block">
                        <a href="http://www.twitter.com"><i class="fa fa-twitter" ></i></a>
                        <a href="http://www.facebook.com"><i class="fa fa-facebook-f"></i></a>
                        <a href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a>
                        <a href="http://www.google.com"><i class="fa fa-google-plus"></i></a>
                    </div><!-- /.social-block -->
                </div><!-- /.container -->
            </div><!-- /.top-bar -->
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box clearfix">
                        <button class="menu-toggler" data-target="#main-nav-bar">
                            <span class="fa fa-bars"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation" id="main-nav-bar">
                        <ul class="navigation-box">
                            <li class=" current ">
                                <a href="{{url('/home')}}">Home</a>
                                <!-- /.sub-menu -->
                            </li>
                            <li><a href="{{url('/about')}}">About</a></li>
                            <li>
                                <a href="{{url('/#')}}">Pages</a>
                                <ul class="sub-menu">
                                   
                                   <!--  <li><a href="{{url('/taxi')}}">Our Taxi</a></li> -->
                                    <li><a href="{{url('/single-taxi')}}">Taxi Details</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li><a href="{{url('/book-ride')}}">Find A Ride</a></li>
                            <li><a href="{{url('offer-ride')}}">Offer A Ride</a></li>
                           <!-- <li><a href="{{url('/driver')}}">Drivers</a></li> -->
                            <li><a href="{{url('/contact')}}">Contact</a></li>
                             <li class="dropdown text-dark ">
            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user contact-btn-block mb-2 text-black" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="mt-2 fa fa-user-circle "style="font-size: 30px;"></i> <span class=" nav-user-name hidden-sm">Settings <i class="mdi mdi-chevron-down"></i></span></a>
            <ul class="sub-menu">
                                    <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
                                    <li><a href="{{url('/profile')}}">Profile</a></li>
                                    <li><a href="{{url('logout')}}">Logout</a></li>
                                </ul><!-- /.sub-menu -->
                    </div><!-- /.navbar-collapse -->
                    
                </div>
                <!-- /.container -->
            </nav>
</header>