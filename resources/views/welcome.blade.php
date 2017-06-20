@extends ('layouts.app')

@section ('content')

    <header>
        @include ('partials.navigation')
        <div class="clearfix"></div>
    </header>

    <!--banner start-->
    <section id="home" class="container ImageBackground ImageBackground--overlay ImageBackground--overlay--white js-minusHeader u-height500" data-overlay="2">
        <div class="ImageBackground__holder">
            <img src="/assets/imgs/white-girl.jpg" alt="...">
        </div>
        <div class="container u-vCenter">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1 class="u-MarginTop0 text-uppercase u-FontSize50 u-xs-FontSize30 u-Weight800">minimal . crispy . dynamic</h1>
                    <div class="u-Block u-MarginBottom30">
                        <span class="text-uppercase u-LetterSpacing3">- creative portfolio template -</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-bottom u-zIndex10">
            <a class="btn btn-sm btn-creative btn-creative--prev btn--vertical text-uppercase ScrollTo" href="#about"><span class="arrow arrow-left"></span>Scroll</a>
        </div>
    </section>
    <!--banner end-->

    <!--heading start-->
    <section id="about" class="u-PaddingTop100">
        <div class="container">
            <div class="row" >
                <div class="col-md-4 col-sm-5">
                    <div class="Heading"  data-title="Alien">
                        <small class="u-Block u-Weight700 u-LetterSpacing2 text-uppercase u-PaddingTop65">Creative portfolio</small>
                        <div class="Split Split--height2 u-MarginTop20 u-MarginBottom5"></div>
                        <h1 class="text-uppercase u-Weight800 u-Margin0">Its all about <br>Creativity <span class="Dot"></span></h1>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-2 col-sm-6 col-sm-offset-1 u-xs-MarginTop30">
                    <p class="u-LineHeight2 u-MarginBottom30">Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats
                        vitaes nemo minima rerums unsers sadips Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo</p>
                    <p class="u-LineHeight2 u-MarginBottom30">Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes</p>
                    <p><a class="btn btn-go" href="#" role="button">Get Started <i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
                </div>
            </div>
        </div>
    </section>
    <!--heading end-->

    <!--portfolio start-->
    <div class="container">
        <div class="row u-MarginTop60">
            <div class="col-md-12">
                <div class="">
                    <ul class="js-PortfolioFilter portfolio-filter">
                        <li class="active"><a href="#" data-filter="*"> All</a></li>
                        @foreach ($states as $state)
                            <li><a href="#" data-filter=".{{ $state->id }}">{{ $state->name }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="row js-Portfolio portfolio-grid portfolio-gallery">
                    @foreach ($photos as $photo)
                        <div class="col-sm-6 portfolio-item {{ $photo->state_id }}">
                            <a href="/img/ups/{{ $photo->name }}" class="portfolio-image popup-gallery" title="{{ $photo->description }}">
                                <img src="/img/ups/{{ $photo->name }}" alt="{{ $photo->name }}" />
                                <div class="portfolio-hover-title">
                                    <div class="portfolio-content">
                                        <h4>{{ $photo->description }}</h4>
                                        <div class="portfolio-category">
                                            <span>{{ $photo->state->name }}</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row u-MarginTop60 u-MarginBottom100">
            <div class="col-md-12">
                <div class="u-FlexCenter">
                    <a href="#" class="btn btn-sm btn-creative btn-creative--prev text-uppercase"><span class="arrow arrow-left"></span>Previous</a>
                    <span class="u-PaddingRight50 u-PaddingLeft50 u-Weight800">01/12</span>
                    <a href="#" class="btn btn-sm btn-creative btn-creative--next text-uppercase">Next<span class="arrow arrow-right"></span></a>
                </div>
            </div>
        </div>
    </div>
    <!--portfolio end-->

@endsection
