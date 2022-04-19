<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.layout.assets.header')
</head>

<body>
    <div class="wrapper">
         <!-- sidebar start -->
        @include('backend.layout.assets.sidebar')
        <!-- sidebar end -->
        <div class="main">
        <!-- top navbar start -->
        @include('backend.layout.assets.navbar')
        <!-- top navbar end -->
        <!-- main conten start-0 -->
        @yield('content')
        <!-- main content end -->
        <!-- footer start-0 -->
        @include('backend.layout.assets.footer')
        <!-- footer end- -->
        </div>
    </div>

    @include('backend.layout.assets.script')
    @yield('script')
    
</body>
</html>