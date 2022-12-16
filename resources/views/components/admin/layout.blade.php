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

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('admin/assets/img/brand/favicon.png') }}" type="image/x-icon" />

    <!-- ICONS CSS -->
    <link href="{{ asset('admin/assets/plugins/icons/icons.css') }}" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="{{ asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- RIGHT-SIDEMENU CSS -->
    <link href="{{ asset('admin/assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

    <!-- P-SCROLL BAR CSS -->
    <link href="{{ asset('admin/assets/plugins/perfect-scrollbar/p-scrollbar.css') }}" rel="stylesheet" />


    <!-- INTERNAL Select2 css -->
    <link href="{{ asset('admin/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />

    <!-- INTERNAL Data table css -->
    <link href="{{ asset('admin/assets/plugins/datatable/css/dataTables.bootstrap5.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/plugins/datatable/css/buttons.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/plugins/datatable/responsive.bootstrap5.css') }}" rel="stylesheet" />

    <link href="{{ asset('admin/assets/plugins/ion-rangeslider/css/ion.rangeSlider.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/plugins/ion-rangeslider/css/ion.rangeSlider.skinFlat.css') }}" rel="stylesheet">
    <!-- STYLES CSS -->
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/style-dark.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/style-transparent.css') }}" rel="stylesheet">


    <!-- SKIN-MODES CSS -->
    <link href="{{ asset('admin/assets/css/skin-modes.css') }}" rel="stylesheet" />

    <!-- ANIMATION CSS -->
    <link href="{{ asset('admin/assets/css/animate.css') }}" rel="stylesheet">

    <!-- SWITCHER CSS -->
    <link href="{{ asset('admin/assets/switcher/css/switcher.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/switcher/demo.css') }}" rel="stylesheet" />

</head>

<body class="ltr main-body app sidebar-mini">

    <x-admin.partials.switcher></x-admin.partials.switcher>

    <x-admin.partials.loader></x-admin.partials.loader>

    <!-- Page -->
    <div class="page">

        <div>

            <x-admin.partials.header></x-admin.partials.header>

            <x-admin.partials.sidebar></x-admin.partials.sidebar>

        </div>

        {{ $slot }}

        <x-admin.partials.right_sidebar></x-admin.partials.right_sidebar>

        <x-admin.partials.message_modal></x-admin.partials.message_modal>

        <x-admin.partials.video_modal></x-admin.partials.video_modal>

        <x-admin.partials.audio_modal></x-admin.partials.audio_modal>




        <x-admin.partials.footer></x-admin.partials.footer>

    </div>
    <!-- End Page -->

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>

    <!-- JQUERY JS -->
    <script src="{{ asset('admin/assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('admin/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- IONICONS JS -->
    <script src="{{ asset('admin/assets/plugins/ionicons/ionicons.js') }}"></script>

    <!-- MOMENT JS -->
    <script src="{{ asset('admin/assets/plugins/moment/moment.js') }}"></script>

    <!-- P-SCROLL JS -->
    <script src="{{ asset('admin/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/perfect-scrollbar/p-scroll.js') }}"></script>

    <!-- SIDEBAR JS -->
    <script src="{{ asset('admin/assets/plugins/side-menu/sidemenu.js') }}"></script>

    <!-- STICKY JS -->
    <script src="{{ asset('admin/assets/js/sticky.js') }}"></script>

    <!-- Chart-circle js -->
    <script src="{{ asset('admin/assets/plugins/circle-progress/circle-progress.min.js') }}"></script>

    <!-- RIGHT-SIDEBAR JS -->
    <script src="{{ asset('admin/assets/plugins/sidebar/sidebar.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/sidebar/sidebar-custom.js') }}"></script>


    <!-- Internal Chart.Bundle js-->
    <script src="{{ asset('admin/assets/plugins/chartjs/Chart.bundle.min.js') }}"></script>

    <!-- Moment js -->
    <script src="{{ asset('admin/assets/plugins/raphael/raphael.min.js') }}"></script>

    <!-- INTERNAL Apexchart js -->
    <script src="{{ asset('admin/assets/js/apexcharts.js') }}"></script>

    <!--Internal Sparkline js -->
    <script src="{{ asset('admin/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!--Internal  index js -->
    <script src="{{ asset('admin/assets/js/index.js') }}"></script>

    <!-- Chart-circle js -->
    <script src="{{ asset('admin/assets/js/chart-circle.js') }}"></script>

    <!-- Internal Data tables -->
    <script src="{{ asset('admin/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>

    <!-- INTERNAL Select2 js -->
    <script src="{{ asset('admin/assets/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/select2.js') }}"></script>


    <!-- EVA-ICONS JS -->
    <script src="{{ asset('admin/assets/plugins/eva-icons/eva-icons.min.js') }}"></script>

    <!-- THEME-COLOR JS -->
    <script src="{{ asset('admin/assets/js/themecolor.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>

    <!-- exported JS -->
    <script src="{{ asset('admin/assets/js/exported.js') }}"></script>

    <!-- SWITCHER JS -->
    <script src="{{ asset('admin/assets/switcher/js/switcher.js') }}"></script>

    <script src="{{ asset('admin/assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/rangeslider.js') }}"></script>
</body>

</html>
