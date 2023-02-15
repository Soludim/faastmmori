@extends('main')

@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(../../images/backgrounds/page-header-bg.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li>Shop</li>
            </ul>
            <h2>Our Products</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Product Start-->
<section class="product">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="product__items">
                    <div class="product__all">
                        <div class="row">

                            @foreach($products as $product)
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="product__all-single">
                                    <div class="product__all-img-box">
                                        <div class="product__all-img">
                                            <img src="{{asset('images/'.$product->image)}}" alt="">
                                            <span class="product__all-sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product__all-content">
                                        <div class="product__all-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="product__all-title">
                                            <a href="#">{{$product->name}}</a>
                                        </h4>
                                        <p class="product__all-price">¢{{$product->price}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Product End-->

@endsection
