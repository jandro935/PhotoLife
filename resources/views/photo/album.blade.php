@extends ('layouts.app')

@section ('content')

    <header id="navigation">
        @include ('partials.navigation')
        <div class="clearfix"></div>
    </header>

    <section class="ImageBackground ImageBackground--gray v-align-parent u-height200">
        <div class="ImageBackground__holder"></div>
        <div class="v-align-child">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12">
                        <h3 class="text-uppercase u-Margin0 u-Weight600">Grid 2</h3>
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

    <div class="container js-PortfolioWrapper">
        <div class="row">
            <div class="col-md-12">
                @if ($userPhotos->isEmpty())
                    {{-- @TODO: Maquetar esto --}}
                    <div class="text-center">
                        <p>No tienes fotos subidas</p>
                    </div>
                @else
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
                @endif
            </div>
        </div>
    </div>
@endsection
