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


<body class="account-page">

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <div class="account-content">
            <div class="container">

                <!-- Account Logo -->
                <div class="account-logo">
                    <a href="/"><img src="{{ asset('assets/img/logo.png')}}" alt="DDIN"></a>
                </div>
                <!-- /Account Logo -->

                <div class="account-box">
                    <div class="account-wrapper">
                        <h3 class="account-title">Login</h3>
                        <p class="account-subtitle">Access to our dashboard</p>

                        <!-- Account Form -->
                        <form method="POST" action="{{ route('login') }}" class="pt-3">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="email" placeholder="Username" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        Keep me signed in
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                <a class="auth-link text-black" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary account-btn" type="submit">Login</button>
                            </div>
                            <div class="account-footer">
                                <p>Don't have an account yet? <a href="/register">Register</a></p>
                            </div>
                        </form>
                        <!-- /Account Form -->

                    </div>
                </div>
            </div>
        </div>
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