<footer class="site-footer">
    <div class="site-footer__top">
        <div class="container">
            <div class="site-footer__top-inner">
                <div class="site-footer-shape-1 float-bob-x" style="background-image: url({{asset('/images/shapes/site-footer-shape-1.png')}});"></div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__column footer-widget__about">
                            <div class="footer-widget__logo">
                                <a href="{{route('home')}}"><img src="{{asset('/images/resources/sahel-logo.png')}}" alt=""></a>
                            </div>
                            <div class="footer-widget__about-text-box">
                                <p class="footer-widget__about-text">Welcome to our Agriculture Farming.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__column footer-widget__Explore">
                            <div class="footer-widget__title-box">
                                <h3 class="footer-widget__title">Explore</h3>
                            </div>
                            <ul class="footer-widget__Explore-list list-unstyled">
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="{{route('faq')}}">FAQs</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget__column footer-widget__news">
                            <div class="footer-widget__title-box">
                                <h3 class="footer-widget__title">News</h3>
                            </div>
                            <ul class="footer-widget__news-list list-unstyled">
                                @foreach ($latest_news as $new)
                                <li>
                                    <div class="footer-widget__news-img">
                                        <img src="{{asset('images/'.$new->cover_image)}}" alt="">
                                    </div>
                                    <div class="footer-widget__news-content">
                                        <p class="footer-widget__news-date">
                                            {{date('d', strtotime($new->created_at))}}
                                            {{date('M', strtotime($new->created_at))}},
                                            {{date('Y', strtotime($new->created_at))}}
                                        </p>
                                        <h5 class="footer-widget__news-sub-title">
                                            <a href="{{url('/news-details/' . $new->id)}}">{{ (strlen($new->title) > 40) ? substr($new->title, 0, 40) . '...' : $new->title }}</a>
                                        </h5>
                                    </div>
                                </li>
                                @if ($loop->index == 1)
                                @break
                                @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="footer-widget__column footer-widget__Contact">
                            <div class="footer-widget__title-box">
                                <h3 class="footer-widget__title">Contact</h3>
                            </div>
                            <ul class="footer-widget__Contact-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-phone-square-alt"></span>
                                    </div>
                                    <div class="text">
                                        <p><a href="tel://{{config('app.com_phone_1')}}">{{config('app.com_phone_1')}}</a></p>
                                        <p><a href="tel://{{config('app.com_phone_2')}}">{{config('app.com_phone_2')}}</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:{{config('app.com_email')}}">{{config('app.com_email')}}</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="text">
                                        <p>{{config('app.com_address_short')}}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <p class="site-footer__bottom-text">© 2023 Faastmmori | Built by <a href="https://israeldebrahmanu.web.app">Soludim</a></p>
                        <div class="site-footer__social">
                            <a href="https://www.twitter.com/{{config('app.twitter')}}"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/{{config('app.facebook')}}"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.instagram.com/{{config('app.instagram')}}"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="site-footer__bottom-scroll">
                            <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-up-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>