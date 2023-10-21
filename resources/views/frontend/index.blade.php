@extends('master.frontend')
@section('title',__('title.index'))
@section('front')
    @include('frontend.includes.index-header')
{{--    @include('frontend.layouts.slider')--}}
    @include('frontend.layouts.counter')
    @include('frontend.layouts.styles')
    @include('frontend.layouts.repair-packages')
    @include('frontend.layouts.carousel')
    @include('frontend.layouts.faq')
    @include('frontend.layouts.partners')

@endsection
