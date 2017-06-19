<!DOCTYPE html>
<html class="html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/assets/imgs/favicon.png" />

    <title>Login</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Heebo:100%7COpen+Sans:300,400,400i,600,700,800">
    <!-- inject:css -->
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
    <!-- endinject -->

</head>
<body>
<section class="">
    <div class="ImageBlock ImageBlock--switch js-FullHeight u-FlexCenter u-xs-Block">
        <div class="ImageBlock__image col-md-6 col-sm-4 hidden-sm hidden-xs">
            <div class="ImageBackground ImageBackground--overlay u-BoxShadow100" data-overlay="5">
                <div class="ImageBackground__holder">
                    <img src="/assets/imgs/signin-halfi-image.jpg" alt=""/>
                </div>
            </div>
        </div>
        <div class="container container--default">
            <div class="row u-FlexCenter u-xs-Block">
                <div class="col-md-5 text-white hidden-sm hidden-xs">
                    <a href="./index.html"><img class="retina" src="/assets/imgs/logo-light.png" alt=""></a>
                    <h1 class="u-MarginTop60 u-MarginBottom15">Simple &amp; Powerfull</h1>
                    <p class="u-MarginBottom50 text-white">Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats.</p>
                    <button type="button" class="btn btn-white btn-white--transparent u-Rounded text-uppercase">Try Alien</button>
                </div>
                <div class="col-md-5 col-md-offset-2">
                    <h1 class="u-xs-FontSize40 u-Weight300 u-MarginTop0 u-xs-MarginTop0 u-MarginBottom15 u-xs-MarginTop30">Sign In</h1>
                    <p class="u-LineHeight2 u-MarginBottom50">Enter your information below to sign in</p>
                    <div class="social-links sl-default round-link colored-link u-MarginBottom50">
                        <a href="{{ route('fb') }}" class="btn facebook" title="Login with Facebook">Facebook</a>
                        <a href="{{ route('tw') }}" class="btn twitter" title="Login with Twitter">Twitter</a>
                        {{--<a href="#" class="btn g-plus">Google Plus</a>--}}
                    </div>
                    <form>
                        <div class="form-group">
                            <input class="form-control" placeholder="User name" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" type="password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Sign In</button>
                            <a href="#" class="pull-right u-MarginTop10 text-muted ">Forgot Password ?</a>
                        </div>
                        <p class="u-MarginTop60 u-xs-MarginTop30">
                            Don't have an account? <a href="{{ route('register') }}" class="btn-go btn-go--info" title="Create New Account">Create New Account</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- inject:js -->
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
<!-- endinject -->
</body>
</html>
