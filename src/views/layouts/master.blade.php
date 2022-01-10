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

    @yield('body')

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
