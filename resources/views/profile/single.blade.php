@extends ('layouts.app')

@section ('content')

    <header>
        @include ('partials.navigation')
        <div class="clearfix"></div>
    </header>

    <!--page title start-->
    <section class="ImageBackground ImageBackground--overlay v-align-parent u-height330 js-minusHeader" data-overlay="2">
        <div class="ImageBackground__holder">
            <img src="/assets/imgs/pb-1.jpg" alt="..."/>
        </div>
        <div class="v-align-child">
            <div class="container ">
                <div class="row ">
                    <div class="col-md-8 col-xs-12 text-white ">
                        <h1 class="u-Margin0 u-Weight300">About Us</h1>
                        <p class="u-LineHeight2 text-muted u-Margin0">Wanna know more about our company? You are in right page</p>
                    </div>

                    <div class="col-md-4 col-xs-12">
                        <ol class="breadcrumb text-white u-MarginTop25 u-MarginBottom0 pull-right">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li class="active"><span>About Us</span></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--page title end-->

    <!--about info start-->
    <div class="container u-MarginTop150 u-xs-MarginTop30">
        <div class="row text-center">
            <div class="col-md-8 col-md-offset-2 col-xs-12 col-xs-offset-0">
                <h1 class="u-weight300  u-MarginTop0 u-MarginBottom50">Our mission is very simple. we just wanna dominate our space
                </h1>
            </div>
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <p class="u-LineHeight3 text-lg">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                    impedit quo minus id quod maxime placeat facere possimuslution tempore, cum soluta nobis.</p>
            </div>

            <div class=" col-md-6 col-md-offset-3 u-MarginTop100 u-xs-MarginTop30">
                <img class="img-responsive" src="{{ $user->user_avatar }}" alt="user_avatar" />
            </div>
        </div>
    </div>
    <!--about info end-->

    <!--skills set start-->
    <div class="panel u-BoxShadow100 u-PaddingTop100 u-PaddingBottom100 u-xs-PaddingTop30 u-MarginBottom0 u-zIndex10 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2">
                    <h1 class="">We have some <br/> extra ordinary skills</h1>
                    <p class="u-sm-MarginBottom30 u-xs-MarginBottom30 u-LineHeight2">cum soluta nobis est eligendi optio cumque nihil
                        impedit quo <br/> minus id quod maxime placeat facere possimus.</p>
                </div>
                <div class="col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2">
                    <div class="u-PaddingRight30 u-sm-PaddingRight0">
                        <div class="progress-title"><span class="pull-right">80%</span><span>HTML / CSS / jQuery</span></div>
                        <div class="progress progress--gradient" data-percent="80%">
                            <span class="progress-bar"></span>
                        </div>
                        <div class="progress-title"><span class="pull-right">90%</span><span>Photoshop</span></div>
                        <div class="progress progress--gradient" data-percent="90%">
                            <span class="progress-bar"></span>
                        </div>
                        <div class="progress-title"><span class="pull-right">75%</span><span>Graphic Design</span></div>
                        <div class="progress progress--gradient" data-percent="75%">
                            <span class="progress-bar"></span>
                        </div>
                        <div class="progress-title"><span class="pull-right">82%</span><span>PHP / WordPress</span></div>
                        <div class="progress progress--gradient" data-percent="82%">
                            <span class="progress-bar"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--skills set end-->

    <!--what we do start-->
    <div class="bg-lighter u-PaddingTop100 u-PaddingBottom100 u-MarginBottom150 u-xs-MarginBottom30">
        <div class="container">
            <div class="row text-center u-MarginBottom100 u-xs-MarginBottom30">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                    <h1 class="u-MarginTop0 u-MarginBottom35">We are ready to serve</h1>
                </div>
                <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
                    <p class="u-LineHeight2">Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="u-PaddingRight40 u-md-Padding0 u-sm-PaddingRight20 u-xs-PaddingLeft20">
                        <span class="u-Weight300 u-FontSize75 text-muted u-Opacity20">01</span>
                        <h4 class="Blurb__hoverText u-MarginTop10 u-Weight700 text-uppercase">What We Do</h4>
                        <p class="u-LineHeight2">This one is a big one that has been haunting me since teenage years. When I was in highschool beginning of Uversity.</p>
                        <p class="u-MarginTop25">
                            <a class="btn-go" href="#" role="button">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="u-PaddingLeft20 u-PaddingRight20 u-md-Padding0 u-sm-PaddingLeft20 u-xs-PaddingRight20">
                        <span class="u-Weight300 u-FontSize75 text-muted u-Opacity20">02</span>
                        <h4 class="Blurb__hoverText u-MarginTop10 u-Weight700 text-uppercase">What We Do</h4>
                        <p class="u-LineHeight2">This one is a big one that has been haunting me since teenage years. When I was in highschool beginning of Uversity.</p>
                        <p class="u-MarginTop25">
                            <a class="btn-go" href="#" role="button">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3 ">
                    <div class="u-PaddingLeft40 u-md-Padding0 u-sm-PaddingLeft10 u-sm-PaddingRight10 u-xs-PaddingLeft20 u-xs-PaddingRight20">
                        <span class="u-Weight300 u-FontSize75 text-muted u-Opacity20">03</span>
                        <h4 class="Blurb__hoverText u-MarginTop10 u-Weight700 text-uppercase">What We Do</h4>
                        <p class="u-LineHeight2">This one is a big one that has been haunting me since teenage years. When I was in highschool beginning of Uversity.</p>
                        <p class="u-MarginTop25">
                            <a class="btn-go" href="#" role="button">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--what we do end-->

    <!--team start-->
    <div class="container">

        <div class="row text-center u-MarginBottom100 u-xs-MarginBottom30">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                <h1 class="u-MarginTop0 u-MarginBottom35">Meet our team</h1>
            </div>
            <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
                <p class="u-LineHeight2">Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-6 u-MarginBottom35">
                <img class="img-responsive" src="/assets/imgs/t0.jpg" alt="...">
                <h4 class="u-MarginTop25 u-MarginBottom0">Jonathan Smith</h4>
                <p class="text-muted">Chief Operating Officer</p>
                <p class="u-MarginTop20 Anchors">
                    <a class="text-muted" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a class="text-muted" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <a class="text-muted" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                </p>
            </div>
            <div class="col-md-4 col-sm-6 u-MarginBottom35">
                <img class="img-responsive" src="/assets/imgs/t1.jpg" alt="...">
                <h4 class="u-MarginTop25 u-MarginBottom0">Rose Tellor</h4>
                <p class="text-muted">Vice Chairman</p>
                <p class="u-MarginTop20 Anchors">
                    <a class="text-muted" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a class="text-muted" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <a class="text-muted" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                </p>
            </div>
            <div class="col-md-4 col-sm-6 u-MarginBottom35">
                <img class="img-responsive" src="/assets/imgs/t2.jpg" alt="...">
                <h4 class="u-MarginTop25 u-MarginBottom0">Josseph Butlar</h4>
                <p class="text-muted">Head of Marketing</p>
                <p class="u-MarginTop20 Anchors">
                    <a class="text-muted" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a class="text-muted" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <a class="text-muted" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                </p>
            </div>
            <div class="col-md-4 col-sm-6 u-MarginBottom35">
                <img class="img-responsive" src="/assets/imgs/t3.jpg" alt="...">
                <h4 class="u-MarginTop25 u-MarginBottom0">Jonathan Smith</h4>
                <p class="text-muted">Chief Operating Officer</p>
                <p class="u-MarginTop20 Anchors">
                    <a class="text-muted" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a class="text-muted" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <a class="text-muted" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                </p>
            </div>
            <div class="col-md-4 col-sm-6 u-MarginBottom35">
                <img class="img-responsive" src="/assets/imgs/t4.jpg" alt="...">
                <h4 class="u-MarginTop25 u-MarginBottom0">Rose Tellor</h4>
                <p class="text-muted">Vice Chairman</p>
                <p class="u-MarginTop20 Anchors">
                    <a class="text-muted" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a class="text-muted" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <a class="text-muted" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                </p>
            </div>
            <div class="col-md-4 col-sm-6 u-MarginBottom35">
                <img class="img-responsive" src="/assets/imgs/t5.jpg" alt="...">
                <h4 class="u-MarginTop25 u-MarginBottom0">Josseph Butlar</h4>
                <p class="text-muted">Head of Marketing</p>
                <p class="u-MarginTop20 Anchors">
                    <a class="text-muted" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a class="text-muted" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <a class="text-muted" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                </p>
            </div>
        </div>
    </div>
    <!--team end-->

    <!--fun factor start-->
    <div class="bg-darker u-PaddingTop100 u-PaddingBottom100 u-MarginTop100">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 u-MarginBottom35">
                    <div class="u-BoxShadow40">
                        <div class="bg-dark u-BorderRadius4">
                            <div class="u-FlexCenter u-PaddingTop50 u-PaddingBottom50">
                                <div class="u-PaddingRight25">
                                    <i class="Blurb__hoverText Icon Icon-user-group Icon--44px" aria-hidden="true"></i>
                                </div>
                                <div class="">
                                    <h2 class="js-CountTo u-Margin0" data-to="1256">0</h2>
                                    <small class="text-uppercase u-LetterSpacing1">Happy Client</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 u-MarginBottom35">
                    <div class="u-BoxShadow40">
                        <div class=" bg-dark u-BorderRadius4">
                            <div class="u-FlexCenter u-PaddingTop50 u-PaddingBottom50">
                                <div class="u-PaddingRight25">
                                    <i class="Blurb__hoverText Icon Icon-pencil Icon--44px" aria-hidden="true"></i>
                                </div>
                                <div class="">
                                    <h2 class="js-CountTo u-Margin0" data-to="22030">0</h2>
                                    <small class="text-uppercase u-LetterSpacing1">Subscribes</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3 u-MarginBottom35">
                    <div class="u-BoxShadow40">
                        <div class="bg-dark u-BorderRadius4 ">
                            <div class="u-FlexCenter u-PaddingTop50 u-PaddingBottom50">
                                <div class="u-PaddingRight25">
                                    <i class="Blurb__hoverText Icon Icon-download Icon--44px" aria-hidden="true"></i>
                                </div>
                                <div class="">
                                    <h2 class="js-CountTo u-Margin0" data-to="105000">0</h2>
                                    <small class="text-uppercase u-LetterSpacing1">Download</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fun factor end-->

    <!--testimonial start-->
    <div class="container u-MarginTop100 u-xs-margintop30">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <h1 class="u-MarginTop100 u-sm-MarginTop0 u-xs-MarginTop0">Our clients always<br/>
                    speak for us</h1>
                <p class="u-LineHeight2">Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores
                    nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Lid est laborum dolo rumes fugats untras. </p>
            </div>
            <div class="col-md-4 col-sm-4">
                <img class="img-responsive" src="/assets/imgs/man0.jpg" alt=""/>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="u-PaddingLeft20 u-sm-Padding0 u-MarginTop100 u-sm-MarginTop0 u-xs-MarginTop0">
                    <div class="Blockquote  u-BoxShadow40">
                        <div class="media u-OverflowVisible u-MarginTop0">
                            <div class="media-body media-middle">
                                <p class="text-italic text-lg u-MarginBottom30">This one is a big one that has been
                                    haunting me since teenage years. When I was in highschool and beginning of University.</p>
                                <strong><em>Smith, CEO</em></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--testimonial end-->

@endsection
