<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from ashik.templatepath.net/conexi-preview-files/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Feb 2020 11:46:44 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carpool</title>
    
    <link rel="apple-touch-icon" sizes="57x57" href="{{url('/')}}{{url('/')}}/assests/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{url('/')}}/assests/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{url('/')}}/assests/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{url('/')}}/assests/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{url('/')}}/assests/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{url('/')}}/assests/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{url('/')}}/assests/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{url('/')}}/assests/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('/')}}/assests/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{url('/')}}/assests/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('/')}}/assests/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{url('/')}}/assests/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('/')}}/assests/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{url('/')}}/assests/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../ms-icon-144x144.html">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{url('/')}}/assests/css/style.css">
    <link rel="stylesheet" href="{{url('/')}}/assests/css/responsive.css">
    <link href="{{url('/')}}/assests/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{url('/')}}/assests/css/brands.css" rel="stylesheet">
    <link href="{{url('/')}}/assests/css/solid.css" rel="stylesheet">
   @stack('styles')


<body>
    <div class="preloader"></div>
    @yield('content')
    <script src="{{url('/')}}/assests/js/jquery.js"></script>
    <script src="{{url('/')}}/assests/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('/')}}/assests/js/owl.carousel.min.js"></script>
    <script src="{{url('/')}}/assests/js/bootstrap-select.min.js"></script>
    <script src="{{url('/')}}/assests/js/jquery.magnific-popup.min.js"></script>
    <script src="{{url('/')}}/assests/js/waypoints.min.js"></script>
    <script src="{{url('/')}}/assests/js/jquery.counterup.min.js"></script>
    <script src="{{url('/')}}/assests/js/jquery.bxslider.min.js"></script>
    <script src="{{url('/')}}/assests/js/theme.js"></script>
     <script src="{{url('/')}}/assests/js/jquery.slimscroll.js"></script>
    
    <script src="{{url('/')}}/assests/js/popper.min.js"></script>
    <script src="{{url('/')}}/assests/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{url('/')}}/assests/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="{{url('/')}}/assests/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{url('/')}}/assests/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.js"></script>
    
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

     <!-- <script src="https://kit.fontawesome.com/576ee63804.js" crossorigin="anonymous"></script> -->
   @yield('scripts')
<script>
    
</script>

</body>