<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- SEO Metatag -->
	<meta name="description" content="">
  	<meta name="keywords" content="">
  	<meta name="author" content="">
	<!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ favicon_logo() }}">
	<title>{{ config('app.name', 'Laravel') }}</title>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&family=Rubik:wght@400;500;700;900&display=swap" rel="stylesheet">
	<!-- Custom Css -->
    <link href="{{ asset('css/admin/style-min.css') }}" rel="stylesheet">
    @stack('css')
    @stack('styles')
</head>
<body>
	<div class="theme-setting-block">
		<a href="#" class="theme-setting-link">
			<i class="bx bx-cog bx-flip-horizontal bx-spin"></i>
		</a>
		<div class="d-flex align-items-center">
			<span class="light-icon icon mr-1 d-block"><em class="bx bx-sun"></em></span>
			<div class="custom-control custom-switch theme-switch">
				<input type="checkbox" class="custom-control-input" id="customSwitchTheme">
				<label class="custom-control-label" for="customSwitchTheme"></label>
			</div>
			<span class="dark-icon icon"><em class="bx bxs-sun"></em></span>
		</div>
	</div>
    <!--Start Login Wrapper-->
    <div class="login-wrapper" style="background:url({{ asset('images/admin/login-bg.jpg') }}) no-repeat center center; background-size: cover;">
        <div class="login-body">
            <section class="login-container row m-0">
                    <div class="col-xl-8 col-11">
                        <div class="card bg-login-card">
                            @yield('content')
                        </div>
                    </div>
            </section>
        </div>
    </div>
    <!--End Login Wrapper-->
	<!-- Bundle Scripts -->
    <script src="{{ asset('js/admin/minify/javascript-lib-min.js') }}"></script>
    <script src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}" type="text/javascript" ></script>
    @stack('scripts')
</body>
</html>
