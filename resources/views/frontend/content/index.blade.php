@extends('master.frontend')
@section('title',$category->translate(app()->getLocale())->meta_title ?? " ")
@section('meta')
    <meta name="description" content="{{ $category->translate(app()->getLocale())->meta_description ?? '' }}">
@endsection
@section('front')
    <header class="page-header" data-background="{{asset('images/slide01.jpg')}}" data-stellar-background-ratio="1.15">
        <div class="container">
            <h1>{{ $category->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('frontend.index') }}">@lang('backend.home-page')</a></li>
                <li class="breadcrumb-item active"
                    aria-current="page">{{$category->translate(app()->getLocale())->name ?? __('backend.translation-not-found')}}</li>
            </ol>
        </div>
    </header>
    <section class="press-relases">
        <div class="container">
            <div class="row">
                @if(!$contents->isEmpty())
                    @foreach($contents as $content)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0s">
                            <figure data-stellar-ratio="1.07">
                                <a href="{{ route('frontend.selectedContent',$content->slug) }}">
                                    <img src="{{ asset($content->photo) }}"
                                         alt="{{ $category->translate(app()->getLocale())->alt ?? __('backend.translation-not-found') }}">
                                </a>
                                <figcaption>
                                    <h5>{{ $content->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}</h5>
                                </figcaption>
                            </figure>
                        </div>
                    @endforeach
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
                    @include('frontend.includes.pagination',['contents' => $contents])
            </div>
        </div>
    </section>
@endsection
