<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.05s">
                <img src="{{ asset('backend/images/logos/logo-5.png') }}" class="logo">
                <p>
                    @lang('backend.footer-description')
                </p>
                <div class="select-box dropdown show">
                    <a class="dropdown-toggle"
                       href="#" role="button"
                       id="language-select"
                       data-toggle="dropdown"
                       aria-haspopup="true"
                       aria-expanded="false">
                        <span>
                            <img src="{{ asset(\App\Models\SiteLanguage::where('code',app()->getLocale())->first()->icon) }}">
                            {{\App\Models\SiteLanguage::where('code',app()->getLocale())->first()->name}}
                        </span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="language-select">
                        @foreach(active_langs() as $active_lang)
                            <li>
                                <a class="dropdown-item"
                                   href="{{ route('frontend.frontLanguage',$active_lang->code) }}">
                                    <img src="{{ asset($active_lang->icon) }}">{{ $active_lang->name }}
                                </a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.10s">
                <ul class="footer-menu">
                    <li><a href="{{ route('frontend.index') }}">@lang('backend.home-page')</a></li>
                    <li><a href="{{ route('frontend.repair-packages') }}">@lang('backend.repair-packages')</a></li>
                    <li><a href="{{ route('frontend.about') }}">@lang('backend.about')</a></li>
                    <li><a href="{{ route('frontend.contact-us-page') }}">@lang('backend.contact-us')</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.15s">
                <ul class="footer-menu">
                    <li><a href="{{ route('frontend.videos') }}">@lang('backend.videos')</a></li>
                    <li><a href="{{ route('frontend.repair-packages') }}">@lang('backend.style')</a></li>
                    <li><a href="{{ route('frontend.repair-packages') }}">@lang('backend.repair-packages')</a></li>
{{--                    <li><a href="#">Butique Room</a></li>--}}
                </ul>
            </div>

            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.20s">
                <div class="contact-box">
                    <h5>@lang('backend.zuhur')</h5>
                    <h3>{{ settings('phone') }}</h3>
                    <p><a href="mailto:{{ settings('email') }}">{{ settings('email') }}</a></p>
                    <ul>
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
                </div>
            </div>
            <div class="col-12">
                <span class="copyright">© {{ now()->year }} @lang('backend.zuhur')</span>
                <span class="creation">
                    <a href="https://instagram.com/techfoz">TechFOZ</a>
                </span>
            </div>
        </div>
    </div>
</footer>
