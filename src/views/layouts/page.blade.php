@extends('admin.layouts.master')

@section('body')

    <div class="dashboard-container">

        <!-- Main start here -->
        <div class="main-content-area">

            <!-- Header start -->
            @include('admin.layouts.includes.header')
            <!-- Header end -->

            <!-- Sidebar start -->
            @include('admin.layouts.includes.left-sidebar')
            <!-- Sidebar end -->

            <!-- Body overlay -->
            <div class="overlay"></div>
            <!-- Body overlay -->

            <div class="main-content-block">
                <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="content-header-title">@yield('title')</li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home-alt"></i></a></li>
                            @yield('breadcrumb')
                        </ol>
                    </nav>
                    @yield('action_buttons')
                </div>

                @yield('content')

            </div>

            @include('admin.layouts.includes.footer')

        </div>
    </div>

@endsection

@include('plugins.sweetalert2')
@include('plugins.moment')
