<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="{{route('home')}}" aria-label="logo image"><img src="{{asset('images/resources/logo.png')}}" width="122" alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:{{config('app.com_email')}}">{{config('app.com_email')}}</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel://{{config('app.com_phone_1')}}">{{config('app.com_phone_1')}}</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="https://www.twitter.com/{{config('app.twitter')}}"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/{{config('app.facebook')}}"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/{{config('app.instagram')}}"><i class="fab fa-instagram"></i></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->



    </div>
    <!-- /.mobile-nav__content -->
</div>