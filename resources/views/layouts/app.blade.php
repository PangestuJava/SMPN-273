<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config("app.name") }} - {{ $title }}</title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('front/dist/css/app.css') }}" />
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body class="py-5 md:py-0">
    <!-- BEGIN: Sidebar Mobile -->
    <div class="mobile-menu md:hidden">
        <div class="mobile-menu-bar">
            <a href="" class="flex mr-auto">
                <img alt="Midone - HTML Admin Template" class="w-6" src="{{ asset('front/dist/images/logo.svg') }}">
            </a>
            <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="bar-chart-2"
                    class="w-8 h-8 text-white transform -rotate-90"></i> </a>
        </div>
        <div class="scrollable">
            <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="x-circle"
                    class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            @include('layouts.partials.sidebar-mobile')
        </div>
    </div>
    <!-- END: Sidebar Mobile -->

    <!-- BEGIN: NavBar -->
    <div
        class="top-bar-boxed h-[70px] md:h-[65px] z-[51] border-b border-white/[0.08] mt-12 md:mt-0 -mx-3 sm:-mx-8 md:-mx-0 px-3 md:border-b-0 relative md:fixed md:inset-x-0 md:top-0 sm:px-8 md:px-10 md:pt-10 md:bg-gradient-to-b md:from-slate-100 md:to-transparent dark:md:from-darkmode-700">
        @include('layouts.partials.navbar')
    </div>
    <!-- END: NavBar -->

    <div class="flex overflow-hidden">
        <!-- BEGIN: Sidebar -->
        <nav class="side-nav">
            @include('layouts.partials.sidebar')
        </nav>
        <!-- END: Sidebar -->

        <!-- BEGIN: Content -->
        <div class="content">
            @yield('slot')
        </div>
        <!-- END: Content -->

    </div>

    <!-- BEGIN: JS Assets-->
    <script
        src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api"]&libraries=places"></script>
    --}}
    <script src="{{ asset('front/dist/js/app.js') }}"></script>
    <!-- END: JS Assets-->
</body>

</html>