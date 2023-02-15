<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials._head')

<body>
    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->

    <div class="page-wrapper">
        @include('partials._navbar')
        @yield('content')
        @include('partials._footer')
    </div>

    @include('partials._mobile_nav')

    @include('partials._scripts')

</body>

</html>