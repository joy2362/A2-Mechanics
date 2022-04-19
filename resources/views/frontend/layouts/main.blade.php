<!DOCTYPE html>
<html lang="en">

<head>
    @extends('frontend.layouts.assets.head')
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
    @extends('frontend.layouts.assets.loader')
<!-- End loader -->

<!-- ======= script ======= -->
    @extends('frontend.layouts.assets.script')
<!-- End script -->
</body>

</html>