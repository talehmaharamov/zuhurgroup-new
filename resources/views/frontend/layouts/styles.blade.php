<section class="press-relases">
    <div class="container">
        <div class="row">
            @foreach($styles as $style)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0s">
                    <figure data-stellar-ratio="1.07">
                        <a href="{{ route('frontend.selectedStyle',$style->slug) }}">
                            <img src="{{ asset($style->photo) }}"
                                 alt="{{ $style->translate(app()->getLocale())->alt ?? __('backend.translation-not-found') }}">
                        </a>
{{--                        <figcaption>--}}
{{--                            <h5>{{ $style->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}</h5>--}}
{{--                            <small>26 November 2018</small>--}}
{{--                        </figcaption>--}}
                    </figure>
                </div>
            @endforeach
        </div>
    </div>
</section>
