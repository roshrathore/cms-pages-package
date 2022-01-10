<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- SEO Metatag -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ favicon_logo() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&family=Rubik:wght@400;500;700;900&display=swap"
        rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{ asset('css/admin/style-min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/admin/app.css') }}" rel="stylesheet"> --}}
    @stack('css')
    @stack('styles')
</head>
    <body class="dashboard-main">

    <div class="dashboard-container">

    <!-- Main start here -->
    <div class="main-content-area">

        <!-- Header start -->
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
        </header>`
        <!-- Header end -->

        <!-- Body overlay -->
        <div class="overlay"></div>
        <!-- Body overlay -->

        <div class="main-content-block">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="content-header-title">@section('title', __('Cms Pages'))</li>
                        <li class="breadcrumb-item active">{{ __('Cms Pages') }}</li>
                    </ol>
                </nav>
                {!! addButton(route('cms-pages.create'), __('Add CmsPage')) !!}
            </div>

            {!! $dataGridHtml !!}

            @include('plugins.bootstrap4-toggle')
            @push('scripts')
                <script type="text/javascript">
                    $(document).on('change','.change-status', function(){
                        var id =  $(this).attr('data-id');
                        $.ajax({
                            url: "{{ route('cms-pages.change_status')}}",
                            type: "post",
                            data: {"id": id},
                            datatype: 'json',
                            success: function (response) {
                                SwalAlert(response.status, response.message);
                            },
                            error: function (response) {
                                SwalAlert(response.status, response.message);
                            }
                        });
                    })
                </script>
            @endpush
        </div>

        <footer class="footer  mt-auto">
            <div class="footer-text d-flex align-items-centerf justify-content-between">
                <span class="d-block">{{ date('Y') }} &copy; {{ config('app.name') }}</span>
                <span class="d-flex align-items-center">Crafted with <i class="bx bxs-heart text-danger ml-1 mr-1"></i> in INDIA </span>
            </div>
        </footer>


    </div>
    </div>

    <!--End Dashboard Wrapper-->
    <!-- Bundle Scripts -->
    <script src="{{ asset('plugins/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('js/admin/minify/javascript-lib-min.js') }}"></script>

    {{-- <script src="{{ asset('js/admin/admin.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    @stack('js')
    @stack('scripts')
    {{-- <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
    <script type="text/javascript">
        let timezone=Intl.DateTimeFormat().resolvedOptions().timeZone; console.log(timezone);
        Cookies.set("browser_timezone",timezone);
    </script> --}}


</body>

</html>
