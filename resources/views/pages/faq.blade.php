@extends('main')
@php
$total = $faqs->count();
$first_loop = ceil($total/2);
$second_loop = $total - $first_loop
@endphp

@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{asset('images/backgrounds/page-header-bg.jpg')}})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><span>/</span></li>
                <li>Pages</li>
            </ul>
            <h2>Our Faqs</h2>
        </div>
    </div>
</section>
<!--Page Header End-->
<!--Faq page Start-->
<section class="faq-page">
    <div class="faq-page-shape-1 float-bob-x" style="background-image: url({{asset('images/shapes/faq-page-shape-1.png')}});">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="faq-page__single">
                    <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                        @for($i=0; $i < $first_loop; $i++)
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>{{$faqs[$i]->question}}</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>{{$faqs[$i]->response}}</p>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6">
                <div class="faq-page__single">
                    <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-2">
                        @for($i=$first_loop; $i < $first_loop+$second_loop; $i++)
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>{{$faqs[$i]->question}}</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>{{$faqs[$i]->response}}</p>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--Faq page End-->

<!--Contact Two Start-->
<section class="contact-two">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Write a Message</span>
            <h2 class="section-title__title">Always here to help you</h2>
            <div class="section-title__icon">
                <img src="{{asset('images/icon/section-title-icon-1.png')}}" alt="">
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
                            <input type="text" placeholder="Phone" name="Phone Number">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-form__input-box">
                            <input type="text" placeholder="Subject" name="Subject">
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