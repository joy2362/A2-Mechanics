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
    <link href="{{asset('frontend/css/custom.css')}}" rel="stylesheet">
</head>

<body>

<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top bg-dark">
    <div class="container d-flex">
        <div class="contact-info mr-auto">
            <i class="icofont-envelope"></i> <a href="mailto:{{$App_Email}}">{{$App_Email}}</a>
            <i class="icofont-phone"></i> {{$App_Mobile}}
        </div>
        <div class="social-links">
            @if($Facebook)
                <a href="{{$Facebook}}" class="facebook"><i class="icofont-facebook"></i></a>
            @endif
            @if($Twitter)
                <a href="{{$Twitter}}" class="twitter"><i class="icofont-twitter"></i></a>
            @endif

            @if($Linkedin)
                <a href="{{$Linkedin}}" class="instagram"><i class="icofont-instagram"></i></a>
            @endif
            @if($Instagram)
                <a href="{{$Instagram}}" class="linkedin"><i class="icofont-linkedin"></i></i></a>
            @endif
        </div>
    </div>
</div>
<!-- End Top Bar -->

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        @if($App_logo)
            <a href="{{route('index')}}" class="logo mr-auto"><img src="{{$App_logo}}" alt="{{$App_Name}}"></a>
        @else
            <h1 class="logo mr-auto">
                <a href="{{route('index')}}">{{$App_Name}}</a>
            </h1>
    @endif
    <!-- Uncomment below if you prefer to use an image logo -->

        <nav class="nav-menu d-none d-lg-block">
            <!-- centering nav links in mobile view -->
            <ul class="text-center">
                <li class="{{ request()->routeIs('index') ? 'active' : '' }}"><a href="{{route('index')}}">{{$home_page->title}}</a></li>
                <li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a href="{{route('about')}}">{{$about_page->title}}</a></li>
                <li class="{{ request()->routeIs('blogs') ? 'active' : '' }}"><a href="{{route('blogs')}}">{{$blog_page->title}}</a></li>
                <li class="{{ request()->routeIs('work') ? 'active' : '' }}"> <a href="{{route('work')}}">{{$work_page->title}}</a></li>
                <li class="{{ request()->routeIs('team') ? 'active' : '' }}"><a href="{{route('team')}}">{{$team_page->title}}</a></li>
                <li class="{{ request()->routeIs('problem') ? 'active' : '' }}"><a href="{{route('problem')}}">{{$problem_page->title}}</a></li>
                <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a href="{{route('contact')}}">{{$contact_page->title}}</a></li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header>
<!-- End Header -->

<!-- ======= main-content ======= -->
    @yield('content')
<!-- End main-content -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>{{$App_Name}}</h3>
                    <p class="mt-2">
                        {{$Footer_Description }}
                        <br><br>
                        <strong>Phone:</strong> {{$App_Mobile}}<br>
                        <strong>Email:</strong> {{$App_Email}}<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('index')}}">{{$home_page->title}}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('about')}}">{{$about_page->title}}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('terms')}}">{{$terms_page->title}}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('contact')}}">{{$contact_page->title}}</a></li>
                    </ul>
                </div>
                @if(count($service) > 1)
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            @foreach($service as $row)
                                <li><i class="bx bx-chevron-right"></i> <a href="{{route('single.work',$row->id)}}">{{$row->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Social Networks</h4>
                    <p> {{$Social_Network_Description }} </p>

                    <!-- displaying social icons in flex -->
                    <div class="social-links mt-3">
                        @if($Facebook)
                            <a href="{{$Facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
                        @endif
                        @if($Twitter)
                            <a href="{{$Twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
                        @endif

                        @if($Linkedin)
                            <a href="{{$Linkedin}}" class="instagram"><i class="bx bxl-instagram"></i></a>
                        @endif
                        @if($Instagram)
                            <a href="{{$Instagram}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- ======= loader ======= -->
<div id="preloader"></div>
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- End loader -->

<!-- ======= script ======= -->
<!-- files JS Files -->
<script src="{{asset('frontend/files/jquery/jquery.min.js')}}"></script>
<script src="{{asset('frontend/files/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/files/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('frontend/files/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('frontend/files/counterup/counterup.min.js')}}"></script>
<script src="{{asset('frontend/files/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/files/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/files/venobox/venobox.min.js')}}"></script>
<script src="{{asset('frontend/files/aos/aos.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

<!-- Template Main JS File -->
<script src="{{asset('frontend/js/main.js')}}"></script>

    @extends('frontend.layouts.assets.script')
<!-- End script -->
</body>

</html>