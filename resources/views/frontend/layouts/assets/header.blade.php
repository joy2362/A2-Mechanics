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