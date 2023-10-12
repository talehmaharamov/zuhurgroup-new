@extends('master.frontend')
@section('title',__('title.about'))
@section('front')
    <header class="page-header" data-background="{{asset('images/slide01.jpg')}}" data-stellar-background-ratio="1.15">
        <div class="container">
            <h1>@lang('backend.about')</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">@lang('backend.home-page')</a></li>
                <li class="breadcrumb-item active" aria-current="page">@lang('backend.about')</li>
            </ol>
        </div>
    </header>
    @foreach($abouts as $about)
        <section class="about-content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>{{ $about->translate(app()->getLocale())->title ?? __('backend.translation-not-found') }}</h2>
                    </div>
                    <div class="col-12">
                        <div class="gallery-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{asset('frontend/images/blog01.jpg')}}"
                                         alt="{{ $about->translate(app()->getLocale())->alt ?? __('backend.translation-not-found') }}">
                                </div>
                            </div>
                            <div class="gallery-pagination"></div>
                        </div>
                        <p>
                            {!! $about->translate(app()->getLocale())->description ?? __('backend.translation-not-found') !!}
                        </p>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endsection
