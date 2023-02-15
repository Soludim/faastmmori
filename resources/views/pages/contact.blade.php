@extends('main')

@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(../../images/backgrounds/page-header-bg.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><span>/</span></li>
                <li>Contact</li>
            </ul>
            <h2>contact us</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Google Map Start-->
<section class="google-map">
    <div class="container">
        <div class="google-map-box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.7302295481427!2d-1.9779185855747534!3d7.604308611765227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfda8ff60a0ecca7%3A0xd838b7c6eade20c4!2sSahel%20Grains!5e0!3m2!1sen!2sgh!4v1675942589417!5m2!1sen!2sgh" class="google-map__one" allowfullscreen></iframe>
        </div>
        <div class="contact-details">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="contact-details__single">
                        <div class="contact-details__icon">
                            <span class="icon-help"></span>
                        </div>
                        <div class="contact-details__text">
                            <p>Have Question?</p>
                            <h3><a href="tel://{{config('app.com_phone_1')}}">Free {{config('app.com_phone_1')}}</a></h3>
                            <h3><a href="tel://{{config('app.com_phone_2')}}">Free {{config('app.com_phone_2')}}</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="contact-details__single">
                        <div class="contact-details__icon">
                            <span class="icon-mailbox"></span>
                        </div>
                        <div class="contact-details__text">
                            <p>Write Email</p>
                            <h3><a href="mailto:{{config('app.com_email')}}">{{config('app.com_email')}}</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="contact-details__single contact-details__single-last">
                        <div class="contact-details__icon">
                            <span class="icon-maps-and-flags"></span>
                        </div>
                        <div class="contact-details__text">
                            <p>Visit Office</p>
                            <h3>{{config('app.com_address')}}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="contact-details__single">
                        <div class="contact-details__social">
                            <a href="https://www.twitter.com/{{config('app.twitter')}}"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/{{config('app.facebook')}}"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.instagram.com/{{config('app.instagram')}}"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Google Map End-->

<!--Contact Two Start-->
<section class="contact-two">
    <div class="contact-two__shape-1 float-bob-x">
        <img src="../../images/shapes/contact-two-shape-1.png" alt="">
    </div>
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Write a Message</span>
            <h2 class="section-title__title">Always here to help you</h2>
            <div class="section-title__icon">
                <img src="../../images/icon/section-title-icon-1.png" alt="">
            </div>
        </div>
        <div class="contact-two__form-box">
            <form method="post" action="{{route('send-mail')}}" class="contact-two__form contact-form-validated" novalidate="novalidate">
                @csrf()
                <div class="row">
                    <div class="col-xl-6">
                        <div class="contact-form__input-box">
                            <input type="text" placeholder="Your Name" name="name">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-form__input-box">
                            <input type="email" placeholder="Email Address" name="email">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-form__input-box">
                            <input type="text" placeholder="Phone" name="phone">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-form__input-box">
                            <input type="text" placeholder="Subject" name="subject">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-form__input-box text-message-box">
                            <textarea name="message" placeholder="Write a Comment"></textarea>
                        </div>
                        <div class="contact-form__btn-box">
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
</section>
<!--Contact Two End-->
@endsection