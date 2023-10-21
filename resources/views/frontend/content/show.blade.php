{{--@extends('master.frontend')--}}
{{--@section('title',$content->translate(app()->getLocale())->meta_title)--}}
{{--@section('meta')--}}
{{--    <meta name="description" content="{{ $content->translate(app()->getLocale())->meta_description ?? '' }}">--}}
{{--@endsection--}}
{{--@section('front')--}}
{{--    <div class="breadcrumb-section section bg-image pt-75 pb-75 pt-sm-55 pb-sm-55 pt-xs-45 pb-xs-45"--}}
{{--         data-bg="{{asset('frontend/images/bg/bt-bg.png')}}">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="breadcrumb-title">--}}
{{--                        <h2>{{ $content->category->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <ul class="page-breadcrumb">--}}
{{--                        <li><a href="{{ route('frontend.index') }}">@lang('backend.home-page')</a></li>--}}
{{--                        <li>{{ $content->category->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div--}}
{{--        class="service-section section pt-100 pt-lg-50 pt-md-30 pt-sm-15 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div style='padding:0 !important'  class="col-lg-12">--}}
{{--                    <div class="service-detail">--}}
{{--                        <div style='height:400px' class="service-gallery mb-35">--}}
{{--                            <div class="item"><img style='height:400px; object-fit:contain'  src="{{ asset($content->photo)  }}"--}}
{{--                                                   alt="{{ $content->translate(app()->getLocale())->alt ?? '' }}"></div>--}}
{{--                            @foreach($content->photos as $photo)--}}
{{--                                <div class="item"><img style='height:400px; object-fit:contain' src="{{ asset($photo->photo) }}"--}}
{{--                                                       alt="{{ $content->translate(app()->getLocale())->alt ?? '' }}">--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                        <div class="content">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-12">--}}
{{--                                    <div class="short-describe">--}}
{{--                                        <h2>{{ $content->translate(app()->getLocale())->name ?? '' }}</h2>--}}
{{--                                        <p>{!! $content->translate(app()->getLocale())->content ?? '' !!}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                @if($relatedContents !== null)--}}
{{--                                    <div class="col-12">--}}
{{--                                        <div class="sample-project">--}}
{{--                                            <h2>@lang('backend.sample')</h2>--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="project-slider project-slider-3-column section">--}}
{{--                                                    @foreach($relatedContents as $rc)--}}
{{--                                                        <div class="project-item">--}}
{{--                                                            <div class="project">--}}
{{--                                                                <a href="{{ route('frontend.selectedContent',$rc->slug) }}"--}}
{{--                                                                   class="image"><img--}}
{{--                                                                        src="{{ asset($rc->photo) }}"--}}
{{--                                                                        alt="{{ $rc->translate(app()->getLocale())->alt ?? '' }}"></a>--}}
{{--                                                                <div class="content">--}}
{{--                                                                    <h4 class="title"><a--}}
{{--                                                                            href="{{ route('frontend.selectedContent',$rc->slug) }}">{{ $rc->translate(app()->getLocale())->name ?? '' }}</a>--}}
{{--                                                                    </h4>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    @endforeach--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--@endsection--}}

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
