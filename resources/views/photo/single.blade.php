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
                        <h3 class="text-uppercase u-Margin0 u-Weight300">Portfolio External</h3>
                        <p class="u-LineHeight2 text-muted u-Margin0">Description of the portfolio image.</p>
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

    <div class="container u-MarginTop100 u-xs-MarginTop30 u-MarginBottom100 u-xs-MarginBottom30">
        <div class="row">
            <div class="col-md-12">
                {{--<div class="imgFitScreen u-MarginBottom100 u-xs-MarginBottom30">--}}
                <div class="u-MarginBottom100 u-xs-MarginBottom30">
                    <img src="/img/ups/{{ $photo->name }}" alt="{{ $photo->name }}" />
                </div>
            </div>
            <div class="col-md-8 col-sm-7">
                <h4 class="u-Weight700 u-MarginTop0">Image Description</h4>
                <p class="u-MarginBottom30 u-LineHeight2">{{ $photo->description }}</p>
            </div>
            <div class="col-md-4 col-sm-5">
                <div class="row u-MarginBottom20">
                    <div class="col-xs-5"><strong>Upload By</strong></div>
                    <div class="col-xs-7">
                        <a href="{{ route('profile', $photo->user_id) }}" class="btn-link" title="{{ $photo->user->name }} profile">{{ $photo->user->name }}</a>
                    </div>
                </div>
                <div class="row u-MarginBottom20">
                    <div class="col-xs-5"><strong>Year</strong></div>
                    <div class="col-xs-7">{{ \Carbon\Carbon::parse($photo->created_at)->format('Y') }}</div>
                </div>
                <div class="row u-MarginBottom20">
                    <div class="col-xs-5"><strong>Share</strong></div>
                    <div class="col-xs-7">
                        <div class="social-links sl-default ">
                            <a href="#" class="">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row u-MarginBottom20">
                    <a href="{{ route('edit', $photo->id) }}" class="btn btn-gradient btn-block u-Rounded" title="Edit">Edit</a>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 u-MarginTop150 u-xs-MarginTop30 u-sm-MarginTop30 u-sm-MarginBottom30 u-MarginBottom150 u-xs-MarginBottom30 u-FlexCenter">
                {{--<a href="#" class="btn btn-sm btn-creative btn-creative--prev text-uppercase"><span class="arrow arrow-left"></span>Previous</a>--}}
                {{--<span class="u-PaddingRight50 u-PaddingLeft50 u-Weight800">01/12</span>--}}
                {{--<a href="#" class="btn btn-sm btn-creative btn-creative--next text-uppercase">Next<span class="arrow arrow-right"></span></a>--}}
            </div>

            <div class="col-md-12 col-sm-12">
                <h4 class="u-MarginBottom20">Similar Photos</h4>
                <div class="js-OwlCarousel4 owl-carousel owl-theme OwlNav OwlNav--triangle OwlNav--top">
                    @foreach ($similarPhotos as $similarPhoto)
                        <div class="item">
                            <img class="img-responsive" src="/img/ups/{{ $similarPhoto->name }}" alt="{{ $similarPhoto->name }}">
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

@endsection
