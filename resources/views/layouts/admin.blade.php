<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- icon -->
    <link rel="icon" href="{{ asset('admin/images/logo/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('admin/images/logo/favicon.png') }}" type="image/x-icon">

    <!-- Animation css -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/animation/animate.min.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">

    <!-- wheather icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/weather/weather-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/weather/weather-icons-wind.css') }}">

    <!--flag Icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/flag-icons-master/flag-icon.css') }}">

    <!-- tabler icons-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/tabler-icons/tabler-icons.css') }}">

    <!-- prism css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/prism/prism.min.css') }}">

    <!-- apexcharts css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/apexcharts/apexcharts.css') }}">

    <!-- glight css -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/glightbox/glightbox.min.css') }}">

    <!-- slick css -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/slick/slick-theme.css') }}">

    <!-- Data Table css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/datatable/jquery.dataTables.min.css') }}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/bootstrap/bootstrap.min.css') }}">

    <!-- vector map css -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/vector-map/jquery-jvectormap.css') }}">

    <!-- simplebar css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/simplebar/simplebar.css') }}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">

    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/responsive.css') }}">

    @livewireStyles
</head>

<body>
    <div class="app-wrapper">
        <div class="loader-wrapper">
            <div class="loader_common">
                <label>Loading...</label>
            </div>
        </div>

        <x-admin.sidebar />

        <div class="app-content">
            <x-admin.header />

            <!-- Main section starts -->
            <main>
                <div class="container-fluid">
                    {{ $slot }}
                </div>
            </main>
            <!-- Main section ends -->

            <x-admin.footer />
        </div>
    </div>

    <!-- latest jquery-->
    <script src="{{ asset('admin/js/jquery-3.6.3.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('admin/vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <!-- Simple bar js-->
    <script src="{{ asset('admin/vendor/simplebar/simplebar.js') }}"></script>

    <!-- phosphor js -->
    <script src="{{ asset('admin/vendor/phosphor/phosphor.js') }}"></script>

    <!-- vector map plugin js -->
    <script src="{{ asset('admin/vendor/vector-map/jquery-jvectormap-2.0.5.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/vector-map/jquery-jvectormap-world-mill.js') }}"></script>

    <!-- slick-file -->
    <script src="{{ asset('admin/vendor/slick/slick.min.js') }}"></script>

    <!--cleave js  -->
    <script src="{{ asset('admin/vendor/cleavejs/cleave.min.js') }}"></script>

    <!-- apexcharts-->
    <script src="{{ asset('admin/vendor/apexcharts/apexcharts.min.js') }}"></script>

    <!-- data table js-->
    <script src="{{ asset('admin/vendor/datatable/jquery.dataTables.min.js') }}"></script>

    <!-- Glight js -->
    <script src="{{ asset('admin/vendor/glightbox/glightbox.min.js') }}"></script>

    <!-- Customizer js-->
    <script src="{{ asset('admin/js/customizer.js') }}"></script>

    <!-- Ecommerce js-->
    <script src="{{ asset('admin/js/ecommerce_dashboard.js') }}"></script>

    <!-- prism js-->
    <script src="{{ asset('admin/vendor/prism/prism.min.js') }}"></script>

    <!-- App js-->
    <script src="{{ asset('admin/js/script.js') }}"></script>

    @livewireScripts
</body>

</html>