<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TASH | METRO') }}</title>

    <link rel="icon" href="img/favicon.png">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset("metro/css/bootstrap.min.css") }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset("metro/css/nice-select.css")}}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset("metro/css/font-awesome.min.css")}}">
    <!-- icofont CSS -->
    <link rel="stylesheet" href="{{ asset("metro/css/icofont.css")}}">
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset("metro/css/slicknav.min.css")}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset("metro/css/owl-carousel.css")}}">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{ asset("metro/css/datepicker.css")}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset("metro/css/animate.min.css")}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset("metro/css/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{ asset("metro/css/normalize.css")}}">
    <link rel="stylesheet" href="{{ asset("metro/style.css")}}">
    <link rel="stylesheet" href="{{ asset("metro/css/responsive.css")}}">
</head>
<body>

<!-- Preloader -->
<div class="preloader">
    <div class="loader">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
        <div class="indicator">
            <svg width="16px" height="12px">
                <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
            </svg>
        </div>
    </div>
</div>
<!-- End Preloader -->

<!-- Header Area -->
<header class="header">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5 col-12">
                </div>
                <div class="col-lg-6 col-md-7 col-12">
                    <ul class="top-contact">
                        <li><i class="fa fa-phone"></i>+99871 241-65-14</li>
                        <li><i class="fa fa-envelope"></i><a href="#">gup@tashmetro.uz</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="logo">
                            <a href="{{ route("front") }}"><img src="{{ asset("metro/img/logo.png") }}" width="50px" alt="#"></a>
                        </div>
                        <div class="mobile-nav"></div>
                    </div>
                    <div class="col-lg-7 col-md-9 col-12">
                        <!-- Main Menu -->
                        <div class="main-menu">
                            <nav class="navigation">
                                <ul class="nav menu">
                                    <li class="active"><a href="{{ route("front") }}">Bosh Sahifa</a></li>
                                    <li class=""><a href="{{ route("front") }}">Ishlar Ro'yhati</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@yield('content')

<footer id="footer" class="footer ">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </div>
</footer>
<script src="{{ asset("metro/js/jquery.min.js")}}"></script>
<script src="{{ asset("metro/js/jquery-migrate-3.0.0.js")}}"></script>
<script src="{{ asset("metro/js/jquery-ui.min.js")}}"></script>
<script src="{{ asset("metro/js/easing.js")}}"></script>
<script src="{{ asset("metro/js/colors.js")}}"></script>
<script src="{{ asset("metro/js/popper.min.js")}}"></script>
<script src="{{ asset("metro/js/bootstrap-datepicker.js")}}"></script>
<script src="{{ asset("metro/js/jquery.nav.js")}}"></script>
<script src="{{ asset("metro/js/slicknav.min.js")}}"></script>
<script src="{{ asset("metro/js/jquery.scrollUp.min.js")}}"></script>
<script src="{{ asset("metro/js/niceselect.js")}}"></script>
<script src="{{ asset("metro/js/tilt.jquery.min.js")}}"></script>
<script src="{{ asset("metro/js/owl-carousel.js")}}"></script>
<script src="{{ asset("metro/js/jquery.counterup.min.js")}}"></script>
<script src="{{ asset("metro/js/steller.js")}}"></script>
<script src="{{ asset("metro/js/wow.min.js")}}"></script>
<script src="{{ asset("metro/js/jquery.magnific-popup.min.js")}}"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="{{ asset("metro/js/bootstrap.min.js")}}"></script>
<script src="{{ asset("metro/js/main.js")}}"></script>
</body>
</html>
