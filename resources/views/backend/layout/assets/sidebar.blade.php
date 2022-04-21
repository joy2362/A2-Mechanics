<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{route('admin.home')}}">
            <span class="align-middle">{{$App_Name}}</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-item {{ request()->routeIs('admin.home') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.home') }}">
                    <i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>
            <li class="sidebar-header">
                Setting
            </li>

            <li class="sidebar-item {{ request()->routeIs('admin.setting.index') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.setting.index') }}">
                    <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Setting</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('admin.founder.index') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.founder.index') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Founder</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('admin.faq.index') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.faq.index') }}">
                    <i class="align-middle" data-feather="help-circle"></i> <span class="align-middle">Faq</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('admin.question.index') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.question.index') }}">
                    <i class="align-middle" data-feather="help-circle"></i> <span class="align-middle">Visitor Question</span>
                </a>
            </li>

        </ul>
    </div>
</nav>