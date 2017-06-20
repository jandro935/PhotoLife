<!DOCTYPE html>
<html class="html" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" type="image/png" href="/assets/imgs/favicon.png" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Heebo:100%7COpen+Sans:300,400,400i,600,700,800">
    <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/vendor/bootsnav/css/bootsnav.css">
    <link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/vendor/alien-icon/css/style.css">
    <link rel="stylesheet" href="/assets/vendor/owl.carousel2/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/vendor/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="/assets/vendor/switchery/switchery.min.css">
    <link rel="stylesheet" href="/assets/vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="/assets/vendor/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="/assets/css/alien.min.css">

</head>
<body>

    @yield ('content')

    @include ('partials.footer')

    <script src="/assets/vendor/jquery/jquery-1.12.0.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/vendor/bootsnav/js/bootsnav.js"></script>
    <script src="/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="/assets/vendor/jquery.countTo/jquery.countTo.min.js"></script>
    <script src="/assets/vendor/owl.carousel2/owl.carousel.min.js"></script>
    <script src="/assets/vendor/jquery.appear/jquery.appear.js"></script>
    <script src="/assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="/assets/vendor/imagesloaded/imagesloaded.js"></script>
    <script src="/assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="/assets/vendor/switchery/switchery.min.js"></script>
    <script src="/assets/vendor/swiper/js/swiper.min.js"></script>
    <script src="/assets/js/alien.js"></script>

    <script src="{{ asset('js/functions.js') }}"></script>
</body>
</html>
