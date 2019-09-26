@php
$currRoute = Route::current()->getName();
@endphp
<header class="header_wrap fixed-top light_skin hover_menu_style2 transparent-header">
	<div class="top-header light_skin d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <ul class="contact_detail list_none text-center text-md-left">
                        <li><i class="ti-mobile"></i>+91 84605 26226</li>
                        <li><i class="ti-location-pin"></i>G-106 Titanium City Center, Satellite, Ahmedabad,Gujarat </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list_none social_icons text-center border_social rounded_social social_white  text-md-right mt-2 mt-md-0">
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                        <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                        <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg"> 
            <a class="navbar-brand" href="index-2.html">
                <img class="logo_light" src="{{ url('public/frontend/assets/images/logo_white.png') }}" alt="logo" />
                <img class="logo_dark" src="{{ url('public/frontend/assets/images/logo_dark.png') }}" alt="logo" />
                <img class="logo_default" src="{{ url('public/frontend/assets/images/logo_dark.png') }}" alt="logo" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                <li class="dropdown dropdown-mega-menu">
                    <a class="nav-link {{ ($currRoute == 'Dashboard')  ? 'active' : '' }}" href="{{ route('Dashboard') }}">Home</a>  
                </li>
                <li class=" dropdown-mega-menu">
                    <a class="nav-link {{ ($currRoute == 'Services')  ? 'active' : '' }}" href="{{ route('Services') }}">Services</a>  
                </li>
                <li class="dropdown dropdown-mega-menu">
                    <a class="nav-link {{ ($currRoute == 'Portfolio')  ? 'active' : '' }}" href="{{ route('Portfolio') }}">Portfolio</a>  
                </li>
                <li class="dropdown dropdown-mega-menu">
                    <a class="nav-link {{ ($currRoute == 'Aboutus')  ? 'active' : '' }}" href="{{ route('Aboutus') }}">About Us</a>  
                </li>
                <li class="dropdown dropdown-mega-menu">
                    <a class="nav-link {{ ($currRoute == 'Contactus')  ? 'active' : '' }}" href="{{ route('Contactus') }}">Contact Us</a>  
                </li>
                <li class="dropdown dropdown-mega-menu">
                    <a class="nav-link {{ ($currRoute == 'Blog')  ? 'active' : '' }}" href="{{ route('Blog') }}">Blog</a>  
                </li>
                
            </ul>
            </div>
           
        </nav>
    </div>
</header>