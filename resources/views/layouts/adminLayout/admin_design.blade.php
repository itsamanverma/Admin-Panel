<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/backend_images/favicon.png ')}}">
    <title>Dashboard</title>
    <!-- Custom CSS -->
    <link href="{{asset('js/backend_js/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/backend_css/style.min.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    @include('layouts.adminLayout.admin_header')
    @include('layouts.adminLayout.admin_sidebar')
    @yield('content')
    @include('layouts.adminLayout.admin_footer')           
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('js/backend_js/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('js/backend_js/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('js/backend_js/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/backend_js/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('js/backend_js/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('js/backend_js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('js/backend_js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('js/backend_js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
    <!-- <script src="{{asset('js/backend_js/pages/dashboards/dashboard1.js')}}"></script> -->
    <!-- Charts js Files -->
    <script src="{{asset('js/backend_js/libs/flot/excanvas.js')}}"></script>
    <script src="{{asset('js/backend_js/libs/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('js/backend_js/libs/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('js/backend_js/libs/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('js/backend_js/libs/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('js/backend_js/libs/flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{asset('js/backend_js/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('js/backend_js/pages/chart/chart-page-init.js')}}"></script>

</body>

</html>