<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title')</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/css/dataTables.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
</head>

<body>
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    <div class="main-wrapper">

       
        @include('admin.layout.header')

       @include('admin.layout.slider')

        <div class="page-wrapper">
           @yield('content')
        </div>
    </div>

    <script src="{{ asset('admin/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('admin/js/feather.min.js') }}"></script>
    
    <script src="{{ asset('admin/js/jquery.slimscroll.min.js') }}"></script>
    
    <script src="{{ asset('admin/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/js/dataTables.bootstrap4.min.js') }}"></script>
    
    <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
    
    <script src="{{ asset('admin/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/apexchart/chart-data.js') }}"></script>
    
    <script src="{{ asset('admin/js/script.js') }}"></script>

    @yield('script')
</body>

</html>