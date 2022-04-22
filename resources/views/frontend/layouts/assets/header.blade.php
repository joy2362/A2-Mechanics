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
                <li class="{{ request()->routeIs('index') ? 'active' : '' }}"><a href="{{route('index')}}">Home</a></li>
                <li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a href="{{route('about')}}">About</a></li>
                <li class="{{ request()->routeIs('blogs') ? 'active' : '' }}"><a href="{{route('blogs')}}">Blogs</a></li>
                <li class="{{ request()->routeIs('work') ? 'active' : '' }}"> <a href="{{route('work')}}">Our works</a></li>
                <li class="{{ request()->routeIs('team') ? 'active' : '' }}"><a href="{{route('team')}}">Our Team</a></li>
                <li class="{{ request()->routeIs('problem') ? 'active' : '' }}"><a href="{{route('problem')}}">Ask a Problem</a></li>
                <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a href="{{route('contact')}}">Contact</a></li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header>