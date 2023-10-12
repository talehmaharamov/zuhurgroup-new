@extends('master.frontend')
@section('title',__('backend.style'))
@section('front')
    <header class="page-header" data-background="{{asset('images/slide01.jpg')}}" data-stellar-background-ratio="1.15">
        <div class="container">
            <h1>@lang('backend.style')</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">@lang('backend.home-page')</a></li>
                <li class="breadcrumb-item active" aria-current="page">@lang('backend.style')</li>
            </ol>
        </div>
    </header>
    @if(!$styles->isEmpty())
        <section
            class="get-consultation" style="background-color: transparent"
            data-background="{{ asset('frontend/images/section-bg01.jpg')}}"
            data-stellar-background-ratio="0.9">
            <div class="container">
                <div class="row">
                    <a href="{{ route('frontend.selectedStyle',$style->slug) }}">
                        @foreach($styles as $style)
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0s">
                                <figure data-stellar-ratio="1.07">
                                    <a href="{{ asset($style->photo) }}" data-fancybox>
                                        <img src="{{ asset($style->photo) }}"
                                             alt="{{ $style->translate(app()->getLocale())->alt ?? __('backend.translation-not-found') }}">
                                    </a>
                                    <figcaption>
                                        <h5>{{ $style->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}</h5>
                                    </figcaption>
                                </figure>
                            </div>
                        @endforeach
                    </a>
                </div>
            </div>
        </section>
    @else
        <section class="error404">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                         <h2 class="mb-4">@lang('backend.data-not-found')</h2>
                        <a href={{ route('frontend.index') }}>@lang('backend.go-to-back')</a>
                    </div>
                </div>
            </div>
        </section>
    @endif

@endsection
