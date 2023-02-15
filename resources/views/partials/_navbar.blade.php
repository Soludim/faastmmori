<header class="main-header">
    <div class="main-header__wrapper">
        <div class="main-header__wrapper-inner">
            <div class="main-header__logo">
                <a href="{{route('home')}}"><img src="../../images/resources/logo.png" alt=""></a>
            </div>
            <div class="main-header__menu-box">
                <div class="main-header__menu-box-top">
                    <ul class="list-unstyled main-header__contact-list">
                        <li>
                            <div class="icon">
                                <i class="icon-email"></i>
                            </div>
                            <div class="text">
                                <p><a href="mailto:{{config('app.com_email')}}">{{config('app.com_email')}}</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="icon-pin"></i>
                            </div>
                            <div class="text">
                                <p>{{config('app.com_address_short')}}</p>
                            </div>
                        </li>
                    </ul>
                    <div class="main-header__social">
                        <a href="https://www.twitter.com/{{config('app.twitter')}}"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/{{config('app.facebook')}}"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/{{config('app.instagram')}}"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="main-header__menu-box-bottom">
                    <nav class="main-menu">
                        <div class="main-menu__wrapper">
                            <div class="main-menu__wrapper-inner">
                                <div class="main-menu__left">
                                    <div class="main-menu__main-menu-box">
                                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                        <ul class="main-menu__list">
                                            <li class="{{Request::is('/') ? 'current':''}}"><a href="{{route('home')}}">Home</a></li>
                                            <li class="{{Request::is('about') ? 'current':''}}"><a href="{{route('about')}}">About</a></li>
                                            <li class="{{Request::is('products') ? 'current':''}}"><a href="{{route('products')}}">Products</a></li>
                                            <li class="{{Request::is('news*') ? 'current':''}}"><a href="{{route('news')}}">News</a></li>
                                            <li class="{{Request::is('faq') ? 'current':''}}"><a href="{{route('faq')}}">FAQs</a></li>
                                            <li class="{{Request::is('contact') ? 'current':''}}"><a href="{{route('contact')}}">Contact</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="main-header__phone-contact-box">
                <div class="main-header__phone-number">
                    <a href="tel://{{config('app.com_phone_1')}}">{{config('app.com_phone_1')}}</a>
                </div>
                <div class="main-header__call-box">
                    <div class="main-header__call-inner">
                        <div class="main-header__call-icon">
                            <span class="fas fa-phone"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->