@php
$setting = App\Models\Settings::first();
@endphp

<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="_token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">

    <!-- plugin css -->
    <link href="{{ asset('public/assets/fonts/feather-font/css/iconfont.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet" />

    <!-- end plugin css -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/demo_1/style.css') }}">
    <!-- End layout styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    @stack('plugin-styles')

    <!-- common css -->
    <link href="{{ asset('public/assets/vendors/core/core.css') }}" rel="stylesheet" />
    <!-- end common css -->



    <link rel="apple-touch-icon" sizes="57x57" href="{{ FAVICON_IMAGE_URL . '/' . $setting->id . '/' . $setting->favicon }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ FAVICON_IMAGE_URL . '/' . $setting->id . '/' . $setting->favicon }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ FAVICON_IMAGE_URL . '/' . $setting->id . '/' . $setting->favicon }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ FAVICON_IMAGE_URL . '/' . $setting->id . '/' . $setting->favicon }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ FAVICON_IMAGE_URL . '/' . $setting->id . '/' . $setting->favicon }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ FAVICON_IMAGE_URL . '/' . $setting->id . '/' . $setting->favicon }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ FAVICON_IMAGE_URL . '/' . $setting->id . '/' . $setting->favicon }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ FAVICON_IMAGE_URL . '/' . $setting->id . '/' . $setting->favicon }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ FAVICON_IMAGE_URL . '/' . $setting->id . '/' . $setting->favicon }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ FAVICON_IMAGE_URL . '/' . $setting->id . '/' . $setting->favicon }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ FAVICON_IMAGE_URL . '/' . $setting->id . '/' . $setting->favicon }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ FAVICON_IMAGE_URL . '/' . $setting->id . '/' . $setting->favicon }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ FAVICON_IMAGE_URL . '/' . $setting->id . '/' . $setting->favicon }}">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    @stack('style')
</head>

<body class="sidebar-dark">


    <div class="main-wrapper" id="app">
        @include('layout.sidebar')
        <div class="page-wrapper">
            @include('layout.header')
            <div class="page-content">
                @yield('content')
            </div>
            @include('layout.footer')
        </div>
    </div>

    <!-- base js -->
    <script src="{{ asset('public/assets/vendors/core/core.js') }}"></script>
    <script src="{{ asset('public/assets/vendors/feather-icons/feather.min.js') }}"></script>
    <!-- end base js -->

    <!-- plugin js -->
    @stack('plugin-scripts')
    <!-- end plugin js -->

    <!-- common js -->
    <script src="{{ asset('public/assets/js/template.js') }}"></script>
    <!-- end common js -->

    @stack('custom-scripts')
    <script>
        $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>

</body>

</html>
