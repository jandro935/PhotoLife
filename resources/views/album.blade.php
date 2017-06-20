@extends ('layouts.app')

@section ('content')

    <header id="navigation">
        @include ('partials.navigation')
        <div class="clearfix"></div>
    </header>

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

    {{--<!--portfolio option nav start-->--}}
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
                        @foreach ($states as $state)
                            <li><a href="#" data-filter=".{{ $state->id }}">{{ $state->name }}</a></li>
                        @endforeach
                    </ul>
                </div>

                {{--<div class="js-Portfolio portfolio-grid portfolio-gallery grid-2 gutter">--}}
                <div class="js-Portfolio portfolio-grid grid-2 gutter">
                    @foreach ($userPhotos as $userPhoto)
                        <div class="portfolio-item {{ $userPhoto->state_id }}">
                            {{--<a href="/img/ups/{{ $userPhoto->name }}" class="portfolio-image popup-gallery" title="{{ $userPhoto->description }}">--}}
                            <a href="{{ route('single', $userPhoto->id) }}" class="portfolio-image popup-gallery" title="See photo">
                                <img src="/img/ups/{{ $userPhoto->name }}" alt="{{ $userPhoto->name }}" />
                                <div class="portfolio-hover-title">
                                    <div class="portfolio-content">
                                        <h4>{{ $userPhoto->description }}</h4>
                                        <div class="portfolio-category">
                                            <span>{{ $userPhoto->state->name }}</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
