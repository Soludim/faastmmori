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
                <li>News</li>
            </ul>
            <h2>News posts</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--News Page Start-->
<section class="blog-page">
    <div class="container">
        <div class="row">
            @foreach($news as $new) 
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                <div class="blog-one__single">
                    <div class="blog-one__img">
                        <img src="{{asset('images/'.$new->cover_image)}}" alt="">
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
<!--News Page End-->
@endsection
