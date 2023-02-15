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
                <li>News</li>
            </ul>
            <h2>News Details</h2>
        </div>
    </div>
</section>
<!--Page Header End-->
<style>
    .my-column {
        float: left;
        width: 50%;
        padding: 5px;
    }

    /* Clearfix (clear floats) */
</style>
<!--Blog Details Start-->
<section class="blog-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-details__left">
                    <div class="blog-details__img">
                        <img src="{{asset('images/'.$news->cover_image)}}" alt="">
                        <div class="blog-details__date">
                            <p>{{date('d', strtotime($news->created_at))}}</p>
                            <span>{{date('M', strtotime($news->created_at))}}</span>
                        </div>
                    </div>
                    <div class="blog-details__content">
                        <ul class="list-unstyled blog-details__meta">
                            <li><a href="#"><i class="fas fa-user-circle"></i> Admin</a>
                            </li>
                        </ul>
                        <h3 class="blog-details__title">{{$news->title}}</h3>
                        <p class="blog-details__text-1">{!! $news->body !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Latest News</h3>
                        <ul class="sidebar__post-list list-unstyled">
                            @foreach($latest_news as $new)
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="{{asset('images/'.$new->cover_image)}}" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <span class="sidebar__post-content-meta"><i class="fas fa-user-circle"></i>Admin</span>
                                        <a href="{{url('/news-details/' . $new->id)}}">
                                            {{ (strlen($new->title) > 43) ? substr($new->title, 0, 43) . '...' : $new->title }}
                                        </a>
                                    </h3>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog Details End-->
@endsection