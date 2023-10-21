@extends('master.frontend')
@section('title',__('title.contact'))
@section('front')
    <header class="page-header" data-background="{{asset('images/slide01.jpg')}}" data-stellar-background-ratio="1.15">
        <div class="container">
            <h1>@lang('backend.contact-us')</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">@lang('backend.home-page')</a></li>
                <li class="breadcrumb-item active" aria-current="page">@lang('backend.contact-us')</li>
            </ol>
        </div>
    </header>
    <section class="contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInUp">
                    <h4><span>@lang('backend.zuhur-single') </span>@lang('backend.group')</h4>
                    <small>@lang('backend.repair-design') @endlang
                    </small>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp">
                    <address>
                        <strong>@lang('backend.visit-us')</strong>
                        <p>{!! settings('address_'.app()->getLocale()) !!}</p>
                    </address>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp">
                    <address>
                        <strong>@lang('backend.contact-information')</strong>
                        <p>
                            <a href="mailto:{{ settings('email') }}">{{ settings('email') }}</a>
                            {{ settings('phone') }}
                        </p>
                    </address>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="map">
                        <div class="pattern-bg" data-stellar-ratio="1.03"></div>
                        <div class="holder" data-stellar-ratio="1.07">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12155.933043634137!2d49.8464878!3d40.3870636!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307de0a9364ac1%3A0x3c582f3cbc30fee9!2sZ%C3%BChur%20Group!5e0!3m2!1sen!2saz!4v1690723411798!5m2!1sen!2saz"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="{{ route('frontend.sendMessage') }}" name="contact" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" id="name" autocomplete="off" required>
                                <span>@lang('backend.name')</span>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" id="email" autocomplete="off" required>
                                <span>@lang('backend.email')</span>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" id="subject" autocomplete="off" required>
                                <span>@lang('backend.subject')</span>
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" id="phone" autocomplete="off" required>
                                <span>@lang('backend.phone')</span>
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" autocomplete="off" required></textarea>
                                <span>@lang('backend.message')</span>
                            </div>
                            <div class="form-group">
                                <button id="submit" type="submit" name="submit">
                                    @lang('backend.send-message')
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
