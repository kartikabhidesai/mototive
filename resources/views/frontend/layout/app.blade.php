<!DOCTYPE html>
<html lang="en">
    <body>
        @include('frontend.include.header')
        @include('frontend.include.loader')
        @include('frontend.include.bodyheader')
            @yield('content')
        @include('frontend.include.bodyfooter')
        @include('frontend.include.footer')
        <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>
    </body>
</html>
