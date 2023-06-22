@extends('main')

@section('content')
<!--Main Slider Start-->
<section class="main-slider clearfix">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url({{ asset('images/backgrounds/main-slider-1-1.jpg') }})"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <p class="main-slider__sub-title">Eat Well, Eat Traditional</p>
                                <h2 class="main-slider__title">Faast Mmori</h2>
                                <div class="main-slider__btn-box">
                                    <a href="{{route('about')}}" class="thm-btn main-slider__btn">Discover More <i class="icon-right-arrow"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url({{asset('images/backgrounds/main-slider-1-2.jpg')}});"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <p class="main-slider__sub-title">No additives, No preservatives</p>
                                <h2 class="main-slider__title">100% Nat.</h2>
                                <div class="main-slider__btn-box">
                                    <a href="{{route('about')}}" class="thm-btn main-slider__btn">Discover More <i class="icon-right-arrow"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url({{asset('images/backgrounds/main-slider-1-3.jpg')}});"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <p class="main-slider__sub-title">The Perfect Taste</p>
                                <h2 class="main-slider__title">Try it!</h2>
                                <div class="main-slider__btn-box">
                                    <a href="{{route('about')}}" class="thm-btn main-slider__btn">Discover More <i class="icon-right-arrow"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="swiper-pagination" id="main-slider-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="icon-right-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="icon-right-arrow"></i>
            </div>
        </div>

    </div>
</section>
<!--Main Slider End-->

<!--Feature One Start-->
<section class="feature-one">
    <div class="container">
        <div class="row">
            <!--Feature One Single Start-->
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="feature-one__single">
                    <div class="feature-one__icon">
                        <span class="icon-farm"></span>
                    </div>
                    <div class="feature-one__content">
                        <h3 class="feature-one__title">the Best Quality <br> Standards</h3>
                    </div>
                </div>
            </div>
            <!--Feature One Single End-->
            <!--Feature One Single Start-->
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="feature-one__single">
                    <div class="feature-one__icon">
                        <span class="icon-free-delivery"></span>
                    </div>
                    <div class="feature-one__content">
                        <h3 class="feature-one__title">a Free Delivery <br> services</h3>
                    </div>
                </div>
            </div>
            <!--Feature One Single End-->
            <!--Feature One Single Start-->
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="feature-one__single">
                    <div class="feature-one__icon">
                        <span class="icon-agriculture-1"></span>
                    </div>
                    <div class="feature-one__content">
                        <h3 class="feature-one__title">Natural Healthy <br> products</h3>
                    </div>
                </div>
            </div>
            <!--Feature One Single End-->
        </div>
    </div>
</section>
<!--Feature One End-->

<!--About One Start-->
<section class="about-one">
    <div class="about-one-shape-1 float-bob-x">
        <img src="{{asset('images/shapes/about-one-shape-1.png')}}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-one__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Get to Know Faast Mmori</span>
                        <h2 class="section-title__title">Faast Mmori is a product from Sahel Grains</h2>
                        <div class="section-title__icon">
                            <img src="{{asset('images/icon/section-title-icon-1.png')}}" alt="">
                        </div>
                    </div>
                    <p class="about-one__text-1">In operation since '09: Sahel Grains.</p>
                    <p class="about-one__text-2">We make pre-fermented corn and cassava products for the
                        preparation of the Ghanaian traditional dishes. Smooth, so no need to sieve,
                        allowing your family to benefit from all the nutrients. Healthy, hygienic, and natural</p>
                    <ul class="list-unstyled about-one__points">
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <p>Faast Mmori Koko - Corn Dough.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <p>Faast Mmori Banku - Corn + Cassava Dough.</p>
                            </div>
                        </li>
                    </ul>
                    <div class="about-one__btn-and-ceo">
                        <div class="about-one__btn-box">
                            <a href="{{route('about')}}" class="thm-btn about-one__btn" target="_blank">About More <i class="icon-right-arrow"></i> </a>
                        </div>
                        <div class="about-one__ceo">
                            <div class="about-one__ceo-img">
                                <img src="{{asset('images/resources/ceo-img.jpg')}}" alt="">
                            </div>
                            <div class="about-one__ceo-content">
                                <h4 class="about-one__ceo-name">Kwame Boateng</h4>
                                <p style="margin-left:40px" class="about-one__ceo-title">CEO, Sahel Grains</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-one__right">
                    <div class="about-one__img-box wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-one__img-one">
                            <img src="{{asset('images/resources/about-one-img-1.jpg')}}" alt="">
                        </div>
                        <div class="about-one__img-two">
                            <img src="{{asset('images/resources/about-one-img-2.jpg')}}" alt="">
                        </div>
                        <div class="about-one__video-link">
                            <a href="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fweb.facebook.com%2FFaastMmori1%2Fvideos%2F1917368598299929%2F&show_text=false&width=560&t=0" class="video-popup">
                                <div class="about-one__video-icon">
                                    <span class="fa fa-play"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About One End-->

<!--Services One Start-->
<section class="services-one">
    <div class="services-one__bg" style="background-image: url({{asset('images/shapes/services-one-shape-1.png')}});">
    </div>
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">What We’re Doing</span>
            <h2 class="section-title__title">Services We’re offering</h2>
            <div class="section-title__icon">
                <img src="{{asset('images/icon/section-title-icon-1.png')}}" alt="">
            </div>
        </div>
        <div class="row">
            <!--Services One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                <div class="services-one__single" style="padding-top:10px">
                    <div class="services-one__img-box">
                        <div class="services-one__icon">
                            <span class="icon-dairy"></span>
                        </div>
                    </div>
                    <div class="services-one__content">
                        <h3 class="services-one__title"><a href="#">Faast <br>
                                Mmori Koko</a></h3>
                        <p class="services-one__text">Premium pre-fermented Corn
                            dough for the preparation of the traditional Ghanaian corn-meal porridge, koko
                        </p>
                    </div>
                </div>
            </div>
            <!--Services One Single End-->
            <!--Services One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms">
                <div class="services-one__single" style="padding-top:10px">
                    <div class="services-one__img-box">
                        <div class="services-one__icon">
                            <span class="icon-dairy"></span>
                        </div>
                    </div>
                    <div class="services-one__content">
                        <h3 class="services-one__title"><a href="#">Faast
                                <br> Mmori Banku</a></h3>
                        <p class="services-one__text">Premium pre-fermented Corn & Cassava
                            dough for the preparation of the traditional Ghanaian dish banku.</p>
                    </div>
                </div>
            </div>
            <!--Services One Single End-->
            <!--Services One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="300ms">
                <div class="services-one__single" style="padding-top:10px">
                    <div class="services-one__img-box">
                        <div class="services-one__icon">
                            <span class="icon-cargo"></span>
                        </div>
                    </div>
                    <div class="services-one__content">
                        <h3 class="services-one__title"><a href="#">Logistics &
                                <br> Distribution</a></h3>
                        <p class="services-one__text">We offer delivery services on time
                            and efficient of our products, guaranteeing customer satisfaction.</p>
                    </div>
                </div>
            </div>
            <!--Services One Single End-->
            <!--Services One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="400ms">
                <div class="services-one__single" style="padding-top:10px">
                    <div class="services-one__img-box">
                        <div class="services-one__icon">
                            <span class="icon-store"></span>
                        </div>
                    </div>
                    <div class="services-one__content">
                        <h3 class="services-one__title"><a href="#">Bulk <br> Supplying</a>
                        </h3>
                        <p class="services-one__text">To cater to the needs of our customers, faastmmori
                            offers bulk supplies of high quality dough.</p>
                    </div>
                </div>
            </div>
            <!--Services One Single End-->
        </div>
    </div>
</section>
<!--Services One End-->

@include('partials._banner')

<!--Unbeatable One Start-->
<section class="unbeatable-one">
    <div class="unbeatable-one__bg  jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url({{asset('images/backgrounds/unbeatable-one-bg.gif')}});"></div>
    <div class="container">
        <div class="unbeatable-one__inner text-center">
            <div class="unbeatable-one__content">
                <div class="unbeatable-one__shape-one wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <img src="{{asset('images/shapes/unbeatable-shape-1.png')}}" alt="" class="float-bob-y">
                </div>
                <div class="unbeatable-one__shape-two wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <img src="{{asset('images/shapes/unbeatable-shape-2.png')}}" alt="" class="float-bob-y">
                </div>
                <p class="unbeatable-one__tagline">We’re Selling Healthy Products</p>
                <h3 class="unbeatable-one__title">The kids love
                    <br> it to bits!
                </h3>
                <div class="unbeatable-one__btn-box">
                    <a href="{{route('about')}}" class="thm-btn unbeatable-one__btn">Discover More <i class="icon-right-arrow"></i> </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Unbeatable One End-->

<!--Healthey Food One Start-->
<!-- <section class="healthy-food-one">
    <div class="healthy-food-one__bg float-bob-x" style="background-image: url({{asset('images/shapes/healthy-food-one-shape-1.png')}});"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="healthy-food-one__left">
                    <div class="healthy-food-one__img">
                        <img src="{{asset('images/resources/shop-rite-1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="healthy-food-one__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">It's Faaaaaaaaaaaast!</span>
                        <h2 class="section-title__title">Faastmmori now at Kumasi ShopRite</h2>
                        <div class="section-title__icon">
                            <img src="{{asset('images/icon/section-title-icon-1.png')}}" alt="">
                        </div>
                    </div>
                    <p class="healthy-food-one__text">Attention all shoppers! Get ready to add a touch of authenticity
                        to your cooking. Kumasi shop rite now has fresh faastmmori readily available in store.
                    </p>
                    <div class="row mt-5">
                        <div class="col-lg-4 about-three__left-img mb-3">
                            <img src="{{asset('images/resources/shop-rite-2.jpg')}}" alt="">
                        </div>
                        <div class="col-lg-4 about-three__left-img mb-3">
                            <img src="{{asset('images/resources/shop-rite-3.jpg')}}" alt="">
                        </div>
                        <div class="col-lg-4 about-three__left-img">
                            <img src="{{asset('images/resources/shop-rite-4.jpg')}}" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--Healthey Food One End-->

@include('partials._testimonials')

<!--Call One Start-->
<section class="call-one">
    <div class="container">
        <div class="call-one__inner wow fadeInUp" data-wow-delay="100ms">
            <div class="call-one__left">
                <h3 class="call-one__content">Healthy products</h3>
                <div class="call-one__icon">
                    <span class="icon-phone-ringing"></span>
                </div>
            </div>
            <div class="call-one__right">
                <div class="call-one__contact-info">
                    <p>Eat Well, Eat Traditional</p>
                    <a href="tel:\\{{config('app.com_phone_1')}}">{{config('app.com_phone_1')}}</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Call One End-->

<!--Project One Start-->
<section class="project-one">
    <div class="project-one__bg float-bob-y-2" style="background-image: url({{asset('images/shapes/project-one-shape-1.png')}});">
    </div>
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Delicious</span>
            <h2 class="section-title__title">Made With Faast</h2>
            <div class="section-title__icon">
                <img src="{{asset('images/icon/section-title-icon-1.png')}}" alt="">
            </div>
        </div>
        <div class="row">
            <!--Project One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="project-one__single">
                    <div class="project-one__inner">
                        <div class="project-one__img">
                            <img src="{{asset('images/resources/made-w-f-1.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="project-one__single">
                    <div class="project-one__inner">
                        <div class="project-one__img">
                            <img src="{{asset('images/resources/made-w-f-2.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="project-one__single">
                    <div class="project-one__inner">
                        <div class="project-one__img">
                            <img src="{{asset('images/resources/made-w-f-3.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="project-one__single">
                    <div class="project-one__inner">
                        <div class="project-one__img">
                            <img src="{{asset('images/resources/made-w-f-4.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Project One End-->
<!--Contact One Start-->
<section class="contact-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="contact-one__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Contact Now</span>
                        <h2 class="section-title__title">Get in touch now</h2>
                        <div class="section-title__icon">
                            <img src="{{asset('images/icon/section-title-icon-1.png')}}" alt="">
                        </div>
                    </div>
                    <p class="contact-one__text">Don't wait, contact us to experience the best
                        service! Our friendly staff <br> is waiting to hear you.</p>
                    <ul class="list-unstyled contact-one__contact-list">
                        <li>
                            <div class="icon">
                                <span class="fas fa-phone-alt"></span>
                            </div>
                            <div class="content">
                                <p>Have Question?</p>
                                <h4><a href="tel://{{config('app.com_phone_1')}}">Free {{config('app.com_phone_1')}}</a></h4>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="fas fa-envelope"></span>
                            </div>
                            <div class="content">
                                <p>Write Email</p>
                                <h4><a href="mailto:{{config('app.com_email')}}">{{config('app.com_email')}}</a></h4>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="fas fa-map-marker"></span>
                            </div>
                            <div class="content">
                                <p>Visit Now</p>
                                <h4>{{config('app.com_address_short')}}</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="contact-one__right">
                    <div class="contact-one__bg float-bob-x" style="background-image: url({{asset('images/shapes/contact-one-shape-1.png')}});"></div>
                    <div class="row">
                        <div class="contact-one__form-box">
                            <form method="post" action="{{route('send-mail')}}" class="contact-one__form contact-one-validated" novalidate="novalidate">
                                @csrf()
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-one__input-box">
                                            <input type="text" placeholder="Your Name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-one__input-box">
                                            <input type="email" placeholder="Email Address" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-one__input-box text-message-box">
                                            <textarea name="message" placeholder="Write a Message"></textarea>
                                        </div>
                                        <div class="contact-one__btn-box">
                                            <span class="thm-btn contact-two__btn">
                                                <input type="submit" value="Send a Message" style="border:none; background: transparent; color:white;" />
                                                <i class="icon-right-arrow"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact One End-->

<!--News One Start-->
<section class="blog-one">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">From the News Post</span>
            <h2 class="section-title__title">Latest News & Articles</h2>
            <div class="section-title__icon">
                <img src="{{asset('images/icon/section-title-icon-1.png')}}" alt="">
            </div>
        </div>
        <div class="row">
            @foreach($latest_news as $new)
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                <div class="blog-one__single">
                    <div class="blog-one__img">
                        <img src="{{'images/'.$new->cover_image}}" alt="">
                        <div class="blog-one__date">
                            <span>{{date('d', strtotime($new->created_at))}}</span>
                            <p>{{date('M', strtotime($new->created_at))}}</p>
                        </div>
                    </div>
                    <div class="blog-one__content">
                        <h3 class="blog-one__title">
                            <a href="{{url('/news-details/' . $new->id)}}">{{ (strlen($new->title) > 43) ? substr($new->title, 0, 43) . '...' : $new->title }}</a>
                        </h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--News One End-->
@endsection