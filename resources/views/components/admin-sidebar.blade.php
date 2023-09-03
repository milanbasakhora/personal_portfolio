<div>
    <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="{{ route('admin.dashboard') }}"> <img alt="image" src="/img/no-image.png" class="header-logo" /> <span
                    class="logo-name">Admin Panel</span>
            </a>

            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Company Profile</li>
                <li class="dropdown active">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link"><i
                            data-feather="monitor"></i><span>Dashboard</span></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="menu-toggle nav-link has-dropdown"><i
                            data-feather="settings"></i><span>Master Setup</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="#">Company Profile</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="menu-toggle nav-link has-dropdown"><i
                            data-feather="clipboard"></i><span>News Setup</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="#">Category</a>
                        </li>
                        <li><a class="nav-link" href="#">Post Article</a></li>
                    </ul>
                </li>
            </ul>
        </aside>
    </div>
</div>
