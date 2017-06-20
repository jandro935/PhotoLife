@extends ('layouts.app')

@section ('content')

    <header>
        @include ('partials.navigation')
        <div class="clearfix"></div>
    </header>

    <!--page title start-->
    <section class="ImageBackground ImageBackground--gray v-align-parent u-height200">
        <div class="ImageBackground__holder"></div>
        <div class="v-align-child">
            <div class="container ">
                <div class="row ">
                    <div class="col-md-8 col-xs-12">
                        <h3 class="text-uppercase u-Margin0 u-Weight600">Portfolio Grid 2</h3>
                    </div>

                    <div class="col-md-4 col-xs-12">
                        <ol class="breadcrumb u-MarginTop5 u-MarginBottom0 pull-right">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Library</a></li>
                            <li class="active"><span>Data</span></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--page title end-->

    <!--portfolio option nav start-->
    {{--<div class="portfolio-nav">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-xs-4">--}}
                    {{--<a href="#" id="portfolio-toggle"><i class="fa fa-bars"></i> Grids</a>--}}
                    {{--<ul class="p-option list-unstyled pull-left js-PortfolioGridController">--}}
                        {{--<li class="active"><a href="#" data-input="grid-2">Grid 2</a></li>--}}
                        {{--<li><a href="#" data-input="grid-3">Grid 3</a></li>--}}
                        {{--<li><a href="#" data-input="grid-4">Grid 4</a></li>--}}
                        {{--<li><a href="#" data-input="grid-5">Grid 5</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                {{--<div class="col-xs-4">--}}
                    {{--<a href="#" id="portfolio-toggle-2"><i class="fa fa-bars"></i> Options</a>--}}
                    {{--<div class="p-option-2 text-center">--}}
                        {{--<ul class="list-unstyled  js-PortfolioWidthController">--}}
                            {{--<li class="active"><a href="#" data-input="box">Box Width</a></li>--}}
                            {{--<li><a href="#" data-input="full">Full Width</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-xs-4">--}}
                    {{--<a href="#" id="portfolio-toggle-3"><i class="fa fa-bars"></i> Options</a>--}}
                    {{--<div class="p-option-3 text-right">--}}
                        {{--<ul class="list-unstyled  js-PortfolioGutterController">--}}
                            {{--<li class="active"><a href="#" data-input="gutter">Gutter</a></li>--}}
                            {{--<li><a href="#" data-input="gutterless">Gutter Less</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!--portfolio option nav end-->--}}

    <div class="container js-PortfolioWrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <ul class="js-PortfolioFilter portfolio-filter text-center">
                        <li class="active"><a href="#" data-filter="*"> All</a></li>
                        <li><a href="#" data-filter=".cat1">printing</a></li>
                        <li><a href="#" data-filter=".cat2">Web</a></li>
                        <li><a href="#" data-filter=".cat3">illustration</a></li>
                        <li><a href="#" data-filter=".cat4">media</a></li>
                        <li><a href="#" data-filter=".cat5">crafts</a></li>
                    </ul>
                </div>

                <div class="js-Portfolio portfolio-grid portfolio-gallery grid-2 gutter">
                    <div class="portfolio-item cat1 cat3 cat5">
                        <a href="assets/imgs/portfolio/01.jpg" class="portfolio-image popup-gallery" title="We are creative">
                            <img src="assets/imgs/portfolio/01.jpg" alt=""/>
                            <div class="portfolio-hover-title">
                                <div class="portfolio-content">
                                    <h4>We are creative</h4>
                                    <div class="portfolio-category">
                                        <span>Cat 1</span>
                                        <span>Cat 2</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-item cat2 cat3 cat4">
                        <a href="assets/imgs/portfolio/02.jpg" class="portfolio-image popup-gallery" title="Branding">
                            <img src="assets/imgs/portfolio/02.jpg" alt=""/>
                            <div class="portfolio-hover-title">
                                <div class="portfolio-content">
                                    <h4>Branding</h4>
                                    <div class="portfolio-category">
                                        <span>Cat 1</span>
                                        <span>Cat 2</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-item cat1 cat2 cat3">
                        <a href="assets/imgs/portfolio/03.jpg" class="portfolio-image popup-gallery" title="Design">
                            <img src="assets/imgs/portfolio/03.jpg" alt=""/>
                            <div class="portfolio-hover-title">
                                <div class="portfolio-content">
                                    <h4>Design</h4>
                                    <div class="portfolio-category">
                                        <span>Cat 1</span>
                                        <span>Cat 2</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-item cat1 cat4">
                        <a href="assets/imgs/portfolio/04.jpg" class="portfolio-image popup-gallery" title="Photography">
                            <img src="assets/imgs/portfolio/04.jpg" alt=""/>
                            <div class="portfolio-hover-title">
                                <div class="portfolio-content">
                                    <h4>Photography</h4>
                                    <div class="portfolio-category">
                                        <span>Cat 1</span>
                                        <span>Cat 2</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-item cat3 cat5">
                        <a href="assets/imgs/portfolio/05.jpg" class="portfolio-image popup-gallery" title="Marketing">
                            <img src="assets/imgs/portfolio/05.jpg" alt=""/>
                            <div class="portfolio-hover-title">
                                <div class="portfolio-content">
                                    <h4>Marketing</h4>
                                    <div class="portfolio-category">
                                        <span>Cat 1</span>
                                        <span>Cat 2</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-item cat4 cat5">
                        <a href="assets/imgs/portfolio/06.jpg" class="portfolio-image popup-gallery" title="Web Desgin">
                            <img src="assets/imgs/portfolio/06.jpg" alt=""/>
                            <div class="portfolio-hover-title">
                                <div class="portfolio-content">
                                    <h4>Web Design</h4>
                                    <div class="portfolio-category">
                                        <span>Cat 1</span>
                                        <span>Cat 2</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-item cat2 cat3">
                        <a href="assets/imgs/portfolio/07.jpg" class="portfolio-image popup-gallery" title="Media">
                            <img src="assets/imgs/portfolio/07.jpg" alt=""/>
                            <div class="portfolio-hover-title">
                                <div class="portfolio-content">
                                    <h4>Media</h4>
                                    <div class="portfolio-category">
                                        <span>Cat 1</span>
                                        <span>Cat 2</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-item cat3 cat4 cat5">
                        <a href="assets/imgs/portfolio/08.jpg" class="portfolio-image popup-gallery" title="Portfolio">
                            <img src="assets/imgs/portfolio/08.jpg" alt=""/>
                            <div class="portfolio-hover-title">
                                <div class="portfolio-content">
                                    <h4>Portfolio</h4>
                                    <div class="portfolio-category">
                                        <span>Cat 1</span>
                                        <span>Cat 2</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
