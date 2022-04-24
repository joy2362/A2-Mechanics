<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('head')

    <!-- Favicons -->
    <link href="{{$App_logo}}" rel="icon">
    <link href="{{$App_logo}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- files CSS Files -->
    <link href="{{asset('frontend/files/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset("frontend/files/icofont/icofont.min.css")}}" rel="stylesheet">
    <link href="{{asset('frontend/files/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/files/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/files/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/files/aos/aos.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">

    <!-- Template Main CSS File -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
</head>

<body>

<!-- ======= Top Bar ======= -->
    @extends('frontend.layouts.assets.top-bar')
<!-- End Top Bar -->

<!-- ======= Header ======= -->
    @extends('frontend.layouts.assets.header')
<!-- End Header -->

<!-- ======= main-content ======= -->
    @yield('content')
<!-- End main-content -->

<!-- ======= Footer ======= -->
    @extends('frontend.layouts.assets.footer')
<!-- End Footer -->

<!-- ======= loader ======= -->
<div id="preloader"></div>
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- End loader -->

<!-- ======= script ======= -->
    @extends('frontend.layouts.assets.script')
<!-- End script -->
</body>

</html>