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
                    <i class="align-middle" data-feather="settings"></i> <span class="align-middle">App Setting</span>
                </a>
            </li>

            <li class="sidebar-header">
                Q&A
            </li>
            <li class="sidebar-item {{ request()->routeIs('admin.faq.index') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.faq.index') }}">
                    <i class="align-middle" data-feather="help-circle"></i> <span class="align-middle">Faq</span>
                </a>
            </li>
            <li class="sidebar-item {{ request()->routeIs('admin.question.index') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.question.index') }}">
                    <i class="align-middle" data-feather="flag"></i> <span class="align-middle">Question</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('admin.feedback.index') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.feedback.index') }}">
                    <i class="align-middle" data-feather="gift"></i> <span class="align-middle">Feedback</span>
                </a>
            </li>

            <li class="sidebar-header">
                Team Member
            </li>
            <li class="sidebar-item {{ request()->routeIs('admin.founder.index') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.founder.index') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Founder</span>
                </a>
            </li>
            <li class="sidebar-item {{ request()->routeIs('admin.team.index') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.team.index') }}">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Members</span>
                </a>
            </li>

            <li class="sidebar-header">
                Our Work
            </li>

            <li class="sidebar-item {{ request()->routeIs('admin.work.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.work.index') }}">
                    <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">Work</span>
                </a>
            </li>

            <li class="sidebar-header">
                Blog
            </li>

            <li class="sidebar-item {{ request()->routeIs('admin.category.index') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.category.index') }}">
                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Category</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('admin.blog.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.blog.index') }}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blog</span>
                </a>
            </li>

        </ul>
    </div>
</nav>