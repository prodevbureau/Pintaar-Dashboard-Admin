<!DOCTYPE html>
<html lang="id" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="description" content="Pintaar Dashboard Admin">

        <title>Pintaar Dashboard | @yield('title')</title>

        <link rel="shortcut icon" href="{{ asset('img/Pintaar-Logo.jpg') }}">

        <link rel="stylesheet" href="{{ asset('lib/AdminLTE-2.4.18/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/AdminLTE-2.4.18/bower_components/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/AdminLTE-2.4.18/bower_components/Ionicons/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/AdminLTE-2.4.18/dist/css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/AdminLTE-2.4.18/dist/css/skins/skin-blue.min.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/AdminLTE-2.4.18/bower_components/morris.js/morris.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/AdminLTE-2.4.18/bower_components/jvectormap/jquery-jvectormap.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/AdminLTE-2.4.18/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/AdminLTE-2.4.18/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/AdminLTE-2.4.18/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @yield('extra-fonts')
        @yield('prerender-js')
        @yield('extra-css')
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
        @include('layout/dashboard/_header')
        @include('layout/dashboard/_sidebar')
        @yield('content')
        @include('layout/dashboard/_footer')
        </div>
        <script src="{{ asset('lib/AdminLTE-2.4.18/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('lib/AdminLTE-2.4.18/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
        <script>
          $.widget.bridge('uibutton', $.ui.button);
        </script>
        <script src="{{ asset('lib/AdminLTE-2.4.18/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('lib/AdminLTE-2.4.18/bower_components/raphael/raphael.min.js') }}"></script>
        <script src="{{ asset('lib/AdminLTE-2.4.18/bower_components/morris.js/morris.min.js') }}"></script>
        <script src="{{ asset('lib/AdminLTE-2.4.18/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('lib/AdminLTE-2.4.18/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('lib/AdminLTE-2.4.18/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{ asset('lib/AdminLTE-2.4.18/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
        <script src="{{ asset('lib/AdminLTE-2.4.18/bower_components/moment/min/moment.min.js') }}"></script>
        <script src="{{ asset('lib/AdminLTE-2.4.18/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('lib/AdminLTE-2.4.18/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('lib/AdminLTE-2.4.18/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
        <script src="{{ asset('lib/AdminLTE-2.4.18/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('lib/AdminLTE-2.4.18/bower_components/fastclick/lib/fastclick.js') }}"></script>
        <script src="{{ asset('lib/AdminLTE-2.4.18/dist/js/adminlte.min.js') }}"></script>
        <script src="{{ asset('lib/AdminLTE-2.4.18/dist/js/pages/dashboard.js') }}"></script>
        <script src="{{ asset('lib/AdminLTE-2.4.18/dist/js/demo.js') }}"></script>

        <script src="{{ asset('js/app.js') }}"></script>

        @yield('extra-js')
    </body>
</html>
