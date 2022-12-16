<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Nowa – Laravel Bootstrap 5 Admin & Dashboard Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords"
        content="admin dashboard, admin dashboard laravel, admin panel template, blade template, blade template laravel, bootstrap template, dashboard laravel, laravel admin, laravel admin dashboard, laravel admin panel, laravel admin template, laravel bootstrap admin template, laravel bootstrap template, laravel template" />

    <!-- Title -->
    <title> Nowa – Laravel Bootstrap 5 Admin & Dashboard Template </title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('admin/assets/img/brand/favicon.png') }}" type="image/x-icon" />

    <!-- Icons css -->
    <link href="{{ asset('admin/assets/plugins/icons/icons.css') }}" rel="stylesheet">

    <!--  bootstrap css-->
    <link href="{{ asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!--  Right-sidemenu css -->
    <link href="{{ asset('admin/assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">


    <!-- P-scroll bar css-->
    <link href="{{ asset('admin/assets/plugins/perfect-scrollbar/p-scrollbar.css') }}" rel="stylesheet" />

    <!--- Style css --->
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/style-dark.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/style-transparent.css') }}" rel="stylesheet">

    <!---Skinmodes css-->
    <link href="{{ asset('admin/assets/css/skin-modes.css') }}" rel="stylesheet" />



    <!--- Animations css-->
    <link href="{{ asset('admin/assets/css/animate.css') }}" rel="stylesheet">

    <!-- INTERNAL Switcher css -->
    <link href="{{ asset('admin/assets/switcher/css/switcher.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/switcher/demo.css') }}" rel="stylesheet" />

</head>

<body class="ltr error-page1">

    {{ $slot }}

    <!-- JQuery min js -->
    <script src="{{ asset('admin/assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('admin/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Ionicons js -->
    <script src="{{ asset('admin/assets/plugins/ionicons/ionicons.js') }}"></script>

    <!-- Moment js -->
    <script src="{{ asset('admin/assets/plugins/moment/moment.js') }}"></script>

    <!-- eva-icons js -->
    <script src="{{ asset('admin/assets/plugins/eva-icons/eva-icons.min.js') }}"></script>

    <!-- generate-otp js -->
    <script src="{{ asset('admin/assets/js/generate-otp.js') }}"></script>

    <!--Internal  Perfect-scrollbar js -->
    <script src="{{ asset('admin/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>


    <!-- generate-otp js -->
    <script src="{{ asset('admin/assets/js/generate-otp.js') }}"></script>


    <!-- THEME-COLOR JS -->
    <script src="{{ asset('admin/assets/js/themecolor.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>

    <!-- exported JS -->
    <script src="{{ asset('admin/assets/js/exported.js') }}"></script>

    <!-- Switcher js -->
    <script src="{{ asset('admin/assets/switcher/js/switcher.js') }}"></script>

</body>

</html>
