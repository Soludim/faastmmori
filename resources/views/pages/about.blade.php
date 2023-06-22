@extends('main')

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
                <li>About</li>
            </ul>
            <h2>About us</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--About Three Start-->
<section class="about-three">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-three__left">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="about-three__left-single">
                                <div class="about-three__left-img">
                                    <img src="{{asset('images/resources/about-three-img-1.jpg')}}" alt="">
                                </div>
                                <div class="about-three__left-img about-three__left-img--2">
                                    <img src="{{asset('images/resources/about-three-img-2.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="about-three__left-single">
                                <div class="about-three__left-img">
                                    <img src="{{asset('images/resources/about-three-img-3.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-three__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Eat Well, Eat Traditional</span>
                        <h2 class="section-title__title">Get to Know Sahel Grains</h2>
                        <div class="section-title__icon">
                            <img src="{{asset('images/icon/section-title-icon-1.png')}}" alt="">
                        </div>
                    </div>
                    <p class="about-three__text-1">Sahel Grains is an agribusiness based in Ghana, West Africa. 
                        We use modern, safe, and healthy food processing methods to produce traditional West African 
                        foods in convenient packaged sizes, under the FAAST brand name, with grains (and other raw materials) 
                        sourced from thousands of smallholder rural farmers.</p>
                    <ul class="list-unstyled about-three__points">
                        <li>
                            <div class="icon-box">
                                <span class="fa fa-check"></span>
                                <p class="icon-box-text">Vision</p>
                            </div>
                            <div class="content">
                                <p>To make African foods more convenient and healthier while maintaining its delicious traditional taste.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-box">
                                <span class="fa fa-check"></span>
                                <p class="icon-box-text">Misssion</p>
                            </div>
                            <div class="content">
                                <p>We achieve this by applying modern, safe, and healthy food processing methods.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Three End-->
<hr />

<!--Project Details Start-->
<section class="project-details" style="margin-top:-122px">
    <div class="container">
        <div class="project-details__content">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="project-details__content-left">
                        <h3 class="project-details__title-1">The FAAST Way</h3>
                        <p class="project-details__text-1">Sahel Grains takes great pains to ensure a sustainable
                            process for all its food based products. Beginning from the production of raw material
                            and following through to the retail shelf, Sahel grains employs meticulous care and
                            process to bring the highest standard products to our customers. </p>
                        <br />
                        <h3 class="project-details__sub-title">Smallholder support</h3>
                        <p class="project-details__text-4">Sahel grains offers various forms of farmer support to
                            currently over 5,000 farmers. Support services include training, land preparation,
                            planting, fertilizer subsidies and other equipment.

                            Our smallholders produce naturally sun-dried maize.</p>
                        <h3 class="project-details__sub-title">Factory Process</h3>
                        <div class="project-details__points-box">
                            <ul class="project-details__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Cleaning</p>
                                    </div>
                                </li>
                                <p class="project-details__text-4">Ingredients once harvested are taken through a five
                                    stage cleaning process to remove all foreign material, aflatoxins and to select only
                                    the best grains possible for preparation.
                                    The water used in the process goes through 6-stages of filtration, including reverse
                                    osmosis this ensures the optimum quality for standard is maintained throughout the process.</p>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Milling</p>
                                    </div>
                                </li>
                                <p class="project-details__text-4">International standard, food grade grinding plates are used
                                    in our flour mills to ensure only the finest consistency to our corn and cassava flour.</p>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Mixing and packaging</p>
                                    </div>
                                </li>
                                <p class="project-details__text-4">Mmori dough is mixed and fermented to precise requirements
                                    before bagged and vacuum packed to ensure a longer shelf life and convenience.
                                    Product is tested continually through the process by quality control agents who ensure
                                    the line produces to consistent specification.

                                    Our Banku and Koko mmori retains the local flavor and a perfect taste from each delivered pack.
                                    This is the FAAST WAY!</p>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="project-details__content-right">
                        <div class="about-three__left-img">
                            <img src="{{asset('images/resources/about-faast-1.jpg')}}" alt="">
                        </div>
                        <div class="about-three__left-img" style="margin-top:20px">
                            <img src="{{asset('images/resources/about-faast-2.jpg')}}" alt="">
                        </div>
                        <div class="about-three__left-img" style="margin-top:20px">
                            <img src="{{asset('images/resources/about-faast-3.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 10px">
                <video width="100%" height="450" controls style="border: 1px solid #e9e9e9" 
                poster="{{asset('images/resources/video_poster.jpeg')}}">
                    <source src="{{asset('images/resources/mmori_video.mp4')}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</section>
<!--Project Details End-->

@include('partials._testimonials')

<!--Cta One Start-->
<section class="cta-one">
    <div class="cta-one__bg" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url({{asset('images/backgrounds/cta-one-bg.jpg')}});"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="cta-one__inner">
                    <div class="cta-one__left">
                        <div class="cta-one__icon">
                            <span class="icon-agriculture-1"></span>
                        </div>
                        <h3 class="cta-one__title">SAHEL GRAINS - EAT WELL, EAT TRADITIONAL
                        </h3>
                    </div>
                    <div class="cta-one__right">
                        <a href="{{route('products')}}" class="thm-btn cta-one__btn">Discover More <i class="icon-right-arrow"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Cta One End-->
@endsection