@extends('master.frontend')
@section('title',$content->translate(app()->getLocale())->meta_title)
@section('meta')
    <meta name="description" content="{{ $content->translate(app()->getLocale())->meta_description ?? '' }}">
@endsection
@section('front')
    <header class="page-header" data-background="{{asset('images/slide01.jpg')}}" data-stellar-background-ratio="1.15">
        <div class="container">
            <h1>{{ $content->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('frontend.index') }}">@lang('backend.home-page')</a></li>
                <li class="breadcrumb-item active"
                    aria-current="page">{{$content->translate(app()->getLocale())->name ?? __('backend.translation-not-found')}}</li>
            </ol>
        </div>
    </header>
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="post">
                        <figure class="post-image">
                            <img src="{{ asset($content->photo) }}"
                                 alt="{{ $content->translate(app()->getLocale())->alt ?? __('backend.translation-not-found') }}">
                        </figure>
                        <div class="post-content single">
                            <h2 class="post-title">
                                <a>{{ $content->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}</a>
                            </h2>
                            <div>
                                {!! $content->translate(app()->getLocale())->content ?? __('backend.translation-not-found') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
