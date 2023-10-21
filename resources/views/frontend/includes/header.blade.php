<div class="whats-float">
    <a href="https://wa.me/{{ settings('phone') }}"
       target="_blank">
        <i class="fab fa-whatsapp"></i>
        <span>
            @lang('Whatsapp')<br>
            <small>{{ settings('phone') }}</small>
        </span>
    </a>
</div>
<div class="whats-float1">
    <a href="{{ settings('instagram') }}"
       target="_blank">
        <i class="fab fa-instagram"></i>
        <span>@lang('Instagram')<br>
            <small>{{ str_replace('https://www.instagram.com/','@',settings('instagram')) }}</small>
        </span>
    </a>
</div>
<div class="preloader">
    <div class="layer"></div>
    <div class="inner">
        <figure>
            <img src="{{asset('frontend/images/preloader.gif')}}" alt="Image">
        </figure>
        <p><span class="text-rotater"
                 data-text="@lang('backend.zuhur') | @lang('backend.loading')">@lang('backend.loading')</span></p>
    </div>
</div>

<div class="transition-overlay">
    <div class="layer"></div>
</div>

<div class="side-navigation">
    <div class="menu">
        <ul>
            <li><a href="{{ route('frontend.index') }}">@lang('backend.home-page')</a></li>
            @foreach($mainCategories as $mc)
                <li>
                    <a href="#">{{ $mc->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}</a>
                    <ul>
                        @foreach($mc->subcategories as $mcs)
                            <li>
                                <a href="{{ route('frontend.selectedCategory',$mcs->slug) }}">{{ $mcs->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
            <li><a href="{{ route('frontend.styles') }}">@lang('backend.style')</a></li>
            <li><a href="{{ route('frontend.videos') }}">@lang('backend.videos')</a></li>
            <li><a href="{{ route('frontend.repair-packages') }}">@lang('backend.repair-packages')</a></li>
            <li><a href="{{ route('frontend.about') }}">@lang('backend.about')</a></li>
            <li><a href="{{ route('frontend.contact-us-page') }}">@lang('backend.contact-us')</a></li>
        </ul>
    </div>
    <div class="side-content">
        <figure>
            <img src="{{ asset('backend/images/logos/logo-5.png') }}" alt="@lang('backend.zuhur')">
        </figure>
        <p>@lang('backend.footer-description')</p>
        <ul class="gallery">
            <li>
                <a href="{{asset('backend/images/images/1.jpg')}}" data-fancybox>
                    <img src="{{asset('backend/images/images/1.jpg')}}" alt="@lang('backend.zuhur') ">
                </a>
            </li>
            <li>
                <a href="{{asset('backend/images/images/2.jpg')}}" data-fancybox>
                    <img src="{{asset('backend/images/images/2.jpg')}}" alt="@lang('backend.zuhur')">
                </a>
            </li>
            <li>
                <a href="{{asset('backend/images/images/3.jpg')}}" data-fancybox>
                    <img src="{{asset('backend/images/images/3.jpg')}}" alt="@lang('backend.zuhur')">
                </a>
            </li>
        </ul>
        <address>{{ settings('address_'.app()->getLocale()) }}</address>
        <h6>{{ settings('phone') }}</h6>
        <p>
            <a href="mailto:{{ settings('email') }}">{{ settings('email') }}</a>
        </p>
        <ul class="social-media">
            <li>
                <a href="{{ settings('facebook') }}" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li>
                <a href="{{ settings('instagram') }}" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href="{{ settings('youtube') }}" target="_blank">
                    <i class="fab fa-youtube"></i>
                </a>
            </li>
        </ul>
        <small>© {{ now()->year  }} TechFOZ </small></div>
</div>
<nav class="navbar">
    <div class="container">
        <div class="upper-side">
            <div class="logo">
                <a href="{{ route('frontend.index') }}">
                    <img src="{{asset('backend/images/logos/logo-5.png')}}" alt="@lang('backend.zuhur')">
                </a>
            </div>
            <div class="phone-email"><img src="{{asset('frontend/images/icon-phone.png')}}" alt="Image">
                <h4>{{ settings('phone') }}</h4>
                <small>
                    <a href="mailto:{{ settings('email') }}">{{ settings('email') }}</a>
                </small>
            </div>
            <div class="language">
                @foreach(active_langs() as $active_lang)
                    <a href="{{ route('frontend.frontLanguage',$active_lang->code) }}">{{ \Illuminate\Support\Str::upper($active_lang->code) }}</a>
                @endforeach
            </div>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="menu">
            <ul>
                <li>
                    <a href="{{ route('frontend.index') }}">@lang('backend.home-page')</a>
                </li>
                @foreach($mainCategories as $mc)
                    <li>
                        <a href="#">{{ $mc->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}</a>
                        <ul>
                            @foreach($mc->subcategories as $mcs)
                                <li>
                                    <a href="{{ route('frontend.selectedCategory',$mcs->slug) }}">{{ $mcs->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
                <li><a href="{{ route('frontend.styles') }}">@lang('backend.style')</a></li>
                <li><a href="{{ route('frontend.repair-packages') }}">@lang('backend.repair-packages')</a></li>
                <li><a href="{{ route('frontend.videos') }}">@lang('backend.videos')</a></li>
                <li><a href="{{ route('frontend.about') }}">@lang('backend.about')</a></li>
                <li><a href="{{ route('frontend.contact-us-page') }}">@lang('backend.contact-us')</a></li>
            </ul>
        </div>
    </div>
</nav>
