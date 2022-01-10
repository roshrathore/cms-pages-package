<header>
    <div class="navigation-bar">
        <nav class="navbar d-flex navbar-expand bd-navbar fixed-top">
            <div class="mr-2 float-left d-flex align-items-center">
                <ul class="nav navbar-nav">
                    <li class="nav-item mobile-menu mr-auto">
                        <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="bx bx-menu"></i></a>
                    </li>
                </ul>
                <ul class="horizontal-brand nav navbar-nav">
                    <li>
                        <a href="">
                            <img class="img-fluid" src="{{ asset('images/admin/brand-logo.svg') }}" alt="branding logo">
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav flex-row ml-auto d-md-flex">

               <!--  <li class="nav-item dropdown dropdown-language">
                    <a class="dropdown-toggle nav-link mr-md-2" id="dropdown-flag" href="#"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i
                            class="flag-icon flag-icon-us"></i><span
                            class="selected-language">English</span></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag">
                        <a class="dropdown-item" href="#" data-language="en"><i
                                class="flag-icon flag-icon-us mr-50"></i> English</a>
                        <a class="dropdown-item" href="#" data-language="fr"><i
                                class="flag-icon flag-icon-fr mr-50"></i> French</a>
                        <a class="dropdown-item" href="#" data-language="de"><i
                                class="flag-icon flag-icon-de mr-50"></i> German</a>
                        <a class="dropdown-item" href="#" data-language="pt"><i
                                class="flag-icon flag-icon-pt mr-50"></i> Portuguese</a>
                    </div>
                </li> -->
                <li class="nav-item nav-search">
                    <a class="nav-link nav-link-search" href="#" data-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bx bx-search"></i>
                    </a>
                    <div class="search-input">
                        <div class="search-box">
                            <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
                            <input class="input" type="text" placeholder="Explore Search..."
                                tabindex="-1" data-search="template-search">
                            <div class="search-input-close"><i class="bx bx-x"></i></div>
                        </div>
                        <ul class="search-list">
                            <li
                                class="auto-suggestion align-items-center justify-content-between cursor-pointer current_item">
                                <a class="align-items-center justify-content-between w-100">
                                    <div class="justify-content-start">
                                        <span class="mr-75 bx bx-error-circle"></span>
                                        <span>No results found.</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- <li class="nav-item dropdown dropdown-notification">
                    <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bx bx-bell bx-tada bx-flip-horizontal"></i>
                        <span class="badge badge-pill badge-danger badge-up">5</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex justify-content-between">
                                <span class="notification-title">7 new Notification</span>
                                <span class="text-bold-400 cursor-pointer">Mark all as read</span>
                            </div>
                        </li>
                        <li class="scrollable-container media-list ps ps--active-y">
                            <div
                                class="d-flex justify-content-between read-notification cursor-pointer">
                                <div class="media d-flex align-items-center">
                                    <div class="media-left pr-0">
                                        <div class="avatar mr-1 m-0">
                                            <img class="round" src="{{ asset('images/admin/hero-image.jpg') }}"
                                                alt="avatar" height="40" width="40">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="media-heading"><span class="text-bold-500">New
                                                Message</span> received</h6>
                                        <small class="notification-text">You have 18 unread
                                            messages</small>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li> -->
                <li class="nav-item user-dropdown dropdown">
                    <a class="nav-link dropdown-toggle dropdown-user-link" href="#" id="userDropdown"
                        role="button" href="#" data-toggle="dropdown" aria-expanded="true">
                        <div class="user-nav d-sm-flex d-none">
                            <span class="user-name">{{ auth()->guard('admin')->user()->name }}</span>
                            <!-- <span class="user-status text-muted">Available</span> -->
                        </div>
                        <span><img class="round" src="{{ auth()->guard('admin')->user()->avatar_url }}" alt="avatar"
                                height="40" width="40" id="header-profile-image"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{ route('admin.profile.index') }}"><i class='bx bx-user mr-2'></i>Edit Profile</a>
                        <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class='bx bx-log-out mr-2'></i>{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                <li class="nav-item theme-setting-block-nav-link">
                    <a class="nav-link theme-setting-link" href="#" role="button" href="#" >
                        <i class="bx bx-cog bx-flip-horizontal"></i>
                    </a>
                    <div class="theme-setting-block">
                        <div class="d-flex align-items-center">
                            <span class="light-icon icon mr-1 d-block"><em class="bx bx-sun"></em></span>
                            <div class="custom-control custom-switch theme-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitchTheme">
                                <label class="custom-control-label" for="customSwitchTheme"></label>
                            </div>
                            <span class="dark-icon icon"><em class="bx bxs-sun"></em></span>
                        </div>
                        <div class="d-flex align-items-center verticle-btn">
                            <span class="vertical-icon icon mr-1 d-block"><em class='bx bx-grid-vertical'></em></span>
                            <div class="custom-control custom-switch sidebar-switch">
                                <input type="checkbox" class="custom-control-input" id="sidebarSwitchBtn">
                                <label class="custom-control-label" for="sidebarSwitchBtn"></label>
                            </div>
                            <span class="horizontal-icon icon"><em class='bx bx-grid-horizontal'></em></span>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>
{{-- {{ route('admin.dashboard') }}
{{ site_logo() }}
{{ asset('images/logo-icon.png') }} --}}
{{-- <a href="{{ route('admin.profile.change-password') }}" class="dropdown-item"> <i class="lni-cog"></i> {{ __('Change Password') }}</a> --}}

