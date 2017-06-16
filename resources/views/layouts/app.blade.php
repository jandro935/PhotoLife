<!DOCTYPE html>
<html class="html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/imgs/favicon.png" />

    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Heebo:100%7COpen+Sans:300,400,400i,600,700,800">
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/bootsnav/css/bootsnav.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/alien-icon/css/style.css">
    <link rel="stylesheet" href="assets/vendor/owl.carousel2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/vendor/switchery/switchery.min.css">
    <link rel="stylesheet" href="assets/vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/vendor/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/alien.min.css">
    <!-- endinject -->

</head>
<body>

    @yield ('content')

    <!--footer start-->
    <footer class="bg-darker u-PaddingTop45 u-PaddingBottom45">
        <div class="container">
            <div class="row text-center u-MarginTop30 u-MarginBottom60 u-PaddingTop70">
                <a class="btn btn-sm btn-creative btn-creative--white btn-creative--next btn--vertical text-uppercase ScrollTo" href="#home">Scroll<span class="arrow arrow-right"></span></a>
            </div>
            <div class="row text-sm">

                <div class="col-md-5">
                    <p class="u-LineHeight2 u-MarginBottom20"><img class="retina logo-v-center u-PaddingRight20" src="assets/imgs/logo-light.png" alt=""> Copyright © 2009–2017 Alien Template.</p>
                </div>
                <div class="col-md-2 text-center">
                    <div class="social-links sl-default light-link u-MarginTop10">
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-5 text-right text-left--xs">
                    <ul class="list-inline text-paragraph u-LineHeight2 u-MarginBottom0 u-MarginTop5">
                        <li><span class="footer-dash-sign light"></span></li>
                        <li class="u-MarginRight10">Call <span class=" light-txt"> +123 456 789</span></li>

                        <li><span class="footer-dash-sign light"></span></li>
                        <li>Email <span class=" light-txt"> info@alienemial.cm</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->


    <!-- inject:js -->
    <script src="assets/vendor/jquery/jquery-1.12.0.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/bootsnav/js/bootsnav.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/jquery.countTo/jquery.countTo.min.js"></script>
    <script src="assets/vendor/owl.carousel2/owl.carousel.min.js"></script>
    <script src="assets/vendor/jquery.appear/jquery.appear.js"></script>
    <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendor/switchery/switchery.min.js"></script>
    <script src="assets/vendor/swiper/js/swiper.min.js"></script>
    <script src="assets/js/alien.js"></script>
    <!-- endinject -->
</body>
</html>
