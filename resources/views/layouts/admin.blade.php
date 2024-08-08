<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Dashboard - HRMS admin template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/admin/img/favicon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css')}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/font-awesome.min.css')}}">

    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/line-awesome.min.css')}}">

    <!-- Chart CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/morris/morris.css')}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css')}}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        @include('admin.partials.navbar')
        <!-- /Header -->

        <!-- Sidebar -->
        @include('admin.partials.sidebar')
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            @yield('content')
        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('assets/admin/js/jquery-3.5.1.min.js')}}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('assets/admin/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/bootstrap.min.js')}}"></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset('assets/admin/js/jquery.slimscroll.min.js')}}"></script>

    <!-- Chart JS -->
    <script src="{{ asset('assets/admin/plugins/morris/morris.min.js')}}"></script>
    <script src="{{ asset('assets/admin/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/chart.js')}}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/admin/js/app.js')}}"></script>

</body>

</html>