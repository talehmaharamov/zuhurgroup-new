{{--<section class="footer-bar">--}}
{{--    <div class="container">--}}
{{--        <div class="inner wow fadeIn">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.05s">--}}
{{--                    <figure>--}}
{{--                        <img src="{{asset('frontend/images/footer-icon01.png')}}" alt="Image">--}}
{{--                    </figure>--}}
{{--                    <h3>Address Infos</h3>--}}
{{--                    <p>--}}
{{--                        Kyiv | G. Stalingrada Avenue, 6 <br>--}}
{{--                        Vilnius | Antakalnio St. 17--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.10s">--}}
{{--                    <figure>--}}
{{--                        <img src="{{asset('frontend/images/footer-icon02.png')}}">--}}
{{--                    </figure>--}}
{{--                    <h3>Working Hours</h3>--}}
{{--                    <p>Monday to Friday--}}
{{--                        <strong>09:00</strong> to <strong>18:30</strong> <br>--}}
{{--                        Saturday we work until--}}
{{--                        <strong>15:30</strong>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.15s">--}}
{{--                    <figure>--}}
{{--                        <img src="{{asset('frontend/images/footer-icon03.png')}}">--}}
{{--                    </figure>--}}
{{--                    <h3>Sales Office</h3>--}}
{{--                    <p>Boryssa Himry 124 B Block Pozniaky<br>--}}
{{--                        Kiev Oblast - Ukraine</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
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
                            <img src="{{ \App\Models\SiteLanguage::where('code',app()->getLocale())->first()->icon }}">
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
                    <li><a href="#">HOMPARK</a></li>
                    <li><a href="#">Apartments</a></li>
                    <li><a href="#">Facilities</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.15s">
                <ul class="footer-menu">
                    <li><a href="#">Suites</a></li>
                    <li><a href="#">Apartments</a></li>
                    <li><a href="#">Villas & Houses</a></li>
                    <li><a href="#">Butique Room</a></li>
                    <li><a href="#">Buildings</a></li>
                </ul>
            </div>

            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.20s">
                <div class="contact-box">
                    <h5>@lang('backend.zuhur')</h5>
                    <h3>{{ settings('phone') }}</h3>
                    <p><a href="mailto:{{ settings('email') }}">{{ settings('email') }}</a></p>
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
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
