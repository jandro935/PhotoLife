@extends ('layouts.app')

@section ('content')

    <header>
        @include ('partials.navigation')
        <div class="clearfix"></div>
    </header>

    <section class="ImageBackground ImageBackground--overlay js-Parallax" data-overlay="2">
        <div class="ImageBackground__holder">
            <img src="/assets/imgs/c2.jpg" alt="" />
        </div>
        <div class="container u-PaddingTop100 u-PaddingBottom50 u-sm-PaddingTop50">
            <div class="row u-MarginTop100 u-MarginBottom100">
                <div class="col-md-6 col-sm-8">
                    <div class="media u-OverflowVisible u-PaddingTop5">
                        <div class="media-left u-PaddingRight50 u-PaddingTop5 u-xs-Block u-xs-PaddingRight0 u-xs-PaddingBottom35">
                            <i class="Icon Icon-form Icon--80px Icon--80px text-white u-Opacity40" aria-hidden="true"></i>
                        </div>
                        <div class="media-body text-white">
                            <small class="text-uppercase text-muted u-LetterSpacing4">Shortcode</small>
                            <h1 class="text-uppercase u-MarginTop0">Form</h1>
                            <div class="Split Split--height2 u-MarginBottom25 bg-white u-Opacity40"></div>
                            <p class="u-LineHeight2 text-muted u-Margin0">This shortcodes are ready to use as well as customize in any template instantly easily.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="text-center u-MarginTop95 u-MarginBottom60">
        <h2 class="Heading-wing">Edit <strong>your photo</strong></h2>
    </div>

    <section class="bg-darker u-PaddingTop100 u-PaddingBottom100">
        <div class="container">
            <div class="row u-MarginBottom60">
                <form method="post" action="{{ route('save') }}" enctype="multipart/form-data" novalidate>
                    {{ csrf_field() }}

                    <div class="col-md-4 col-md-offset-4">
                        <div class="form-group">
                            <div class="upload-zone">
                                <span class="Icon Icon-upload"></span>
                                <input type="file" class="form-control form-control--shadow" id="image-media" name="image" required>

                                <img class="preview-image" src="#" width="" height="">
                                <a class="btn btn-gradient btn-block u-Rounded change-image-button">Change</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="form-control form-control--light u-Rounded" name="state" required>
                                <option>Select State</option>
                                @foreach ($states as $state)
                                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control form-control--shadow" name="description" rows="" placeholder="Description">
                                {{ old('description') }}
                            </textarea>
                        </div>
                        <button type="submit" class="btn btn-gradient btn--alien btn-block">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
