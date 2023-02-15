@extends('main')

@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li>Page</li>
            </ul>
            <h2>404 Error page</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Error Page Start-->
<section class="error-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="error-page__inner">
                    <div class="error-page__title-box">
                        <h2 class="error-page__title">404</h2>
                    </div>
                    <h3 class="error-page__tagline">Sorry, We Can't Find that Page!</h3>
                    <p class="error-page__text">The page you are looking for was moved, removed, renamed or
                        never existed.</p>
                    <form class="error-page__form">
                        <div class="error-page__form-input">
                            <input type="search" placeholder="Search Here">
                            <button type="submit"><i class="icon-magnifying-glass"></i></button>
                        </div>
                    </form>
                    <div class="error-page__btn-box">
                        <a href="index.html" class="thm-btn error-page__btn">Back to Home<i class="icon-right-arrow"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Error Page End-->
@endsection