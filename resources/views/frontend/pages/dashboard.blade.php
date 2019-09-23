@extends('frontend.layout.app')
@section('content')
<section class="banner_section p-0 full_screen">
    <div id="carouselExampleControls" class="banner_content_wrap carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active background_bg overlay_bg" data-img-src="{{ url('frontend/assets/images/banner1.jpg') }}">
                <div class="banner_slide_content">
                    <div class="container"><!-- START CONTAINER -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                <div class="banner_content text_white">
                                    <h2 class="animation text-uppercase" data-animation="fadeInDown" data-animation-delay="1s">Welcome To Anger.</h2>
                                    <p class="animation my-4" data-animation="fadeInUp" data-animation-delay="1.5s">Lorem is simply text of the printing and typesetting industry.</p>
                                    <a class="btn btn-default animation" href="#" data-animation="fadeInUp" data-animation-delay="1.8s">Get Started</a>
                                    <a class="btn btn-outline-white animation" href="#" data-animation="fadeInUp" data-animation-delay="1.8s">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- END CONTAINER-->
                </div>
            </div>
            <div class="carousel-item background_bg overlay_bg" data-img-src="{{ url('frontend/assets/images/banner2.jpg') }}">
                <div class="banner_slide_content">
                    <div class="container"><!-- STRART CONTAINER -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 text-left">
                                <div class="banner_content text_white">
                                    <h2 class="animation text-uppercase" data-animation="fadeInDown" data-animation-delay="1s">easy To build </h2>
                                    <p class="animation my-4" data-animation="fadeInUp" data-animation-delay="1.5s">Contrary to popular belief, Lorem Ipsum is not simply random</p>
                                    <a class="btn btn-default animation" href="#" data-animation="fadeInUp" data-animation-delay="1.8s">Get Started</a>
                                    <a class="btn btn-outline-white animation" href="#" data-animation="fadeInUp" data-animation-delay="1.8s">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- END CONTAINER-->
                </div>
            </div>
            <div class="carousel-item overlay_bg">
                <div class="banner_slide_content">
                    <div class="container"><!-- STRART CONTAINER -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 text-right">
                                <div class="banner_content text_white">
                                    <h2 class="animation text-uppercase" data-animation="fadeInDown" data-animation-delay="1s">Faster And Easy</h2>
                                    <p class="animation my-4" data-animation="fadeInUp" data-animation-delay="1.5s">Ipsum generators on the Internet tend to repeat predefined</p>
                                    <a class="btn btn-default animation" href="#" data-animation="fadeInUp" data-animation-delay="1.8s">Get Started</a>
                                    <a class="btn btn-outline-white animation" href="#" data-animation="fadeInUp" data-animation-delay="1.8s">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- END CONTAINER-->
                </div>
                <div class="video_wrap">
                    <video loop autoplay muted poster="{{ url('frontend/assets/images/video_poster.jpg') }}">
                        <source src="{{ url('frontend/assets/images/sample.mp4') }}" type="video/mp4"></source>
                    </video>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><i class="ion-chevron-left"></i></a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><i class="ion-chevron-right"></i></a>
    </div>
</section>
<!-- END SECTION BANNER --> 

<!-- START SECTION ABOUT US -->
<section id="about" class="parallax_bg" data-parallax-bg-image="{{ url('frontend/assets/images/bubble.png') }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12"> 
                <div class="mb-4 mb-lg-0 animation" data-animation="fadeInLeft" data-animation-delay="0.1s">
                    <img src="{{ url('frontend/assets/images/about_img1.png') }}" alt="aboutimg"/> 
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 animation" data-animation="fadeInUp" data-animation-delay="0.1s">
                <div class="heading_s1"> 
                    <h1>About The Anger</h1>
                </div>
                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <div class="list_style_3">
                            <ul>
                                <li>Multiple header layouts</li>
                                <li>Responsive Design</li>
                                <li>Nice Parallax Effect</li>
                                <li>Easy to Customize</li>
                                <li>Retina Ready</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="list_style_3">
                            <ul>
                                <li>Modern Framework</li>
                                <li>Full Documentation</li>
                                <li>Amazing Features</li>
                                <li>Pixel Perfect</li>
                                <li>unique Design</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-outline-default">Read More</a>	
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT US --> 

<!-- START SECTION FEATURE -->
<section class="gray_bg small_pb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-9 animation" data-animation="fadeInUp" data-animation-delay="0.1s">
                <div class="heading_s1 text-center">
                    <h2>Our Services</h2>
                </div>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">	
                <div class="clearfix small_divider"></div>
            </div>
        </div>
        <div class="row animation" data-animation="fadeInUp" data-animation-delay="0.1s">
            <div class="col-md-4 col-sm-6 mb-lg-5 mb-3 text-center">
                <div class="icon_box icon_box_style_1">
                    <div class="box_icon mb-3">	
                        <i class="icon icon-display"></i>
                    </div>
                    <div class="icon_box_content">
                        <h5>Responsive Design</h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-lg-5 mb-3 text-center">
                <div class="icon_box icon_box_style_1">
                    <div class="box_icon mb-3">	
                        <i class="icon icon-eye"></i>
                    </div>
                    <div class="icon_box_content">
                        <h5>Retina Ready</h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-lg-5 mb-3 text-center">
                <div class="icon_box icon_box_style_1">
                    <div class="box_icon mb-3">	
                        <i class="icon icon-equalizer2"></i>
                    </div>
                    <div class="icon_box_content">
                        <h5>Parallax Effact</h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-lg-5 mb-3 text-center">
                <div class="icon_box icon_box_style_1">
                    <div class="box_icon mb-3">	
                        <i class="icon icon-embed2"></i>
                    </div>
                    <div class="icon_box_content">
                        <h5>Html5 & Css3</h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-lg-5 mb-3 text-center">
                <div class="icon_box icon_box_style_1">
                    <div class="box_icon mb-3">	
                        <i class="icon icon-lifebuoy"></i>
                    </div>
                    <div class="icon_box_content">
                        <h5>Expert Support</h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-lg-5 mb-3 text-center">
                <div class="icon_box icon_box_style_1">
                    <div class="box_icon mb-3">	
                        <i class="icon icon-cog"></i>
                    </div>
                    <div class="icon_box_content">
                        <h5>Easy To Customize</h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION FEATURE -->

<!-- START SECTION INFORMATION -->
<section class="background_bg position_right_bottom bg_norepeat bg_size_contain" data-img-src="{{ url('frontend/assets/images/pattren_bg1.png') }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 animation" data-animation="fadeInUp" data-animation-delay="0.1s">
                <div class="heading_s1"> 
                    <h2>Lorem Ipsum Dolor!</h2>
                </div>
                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="list_style_2 color_blue">
                            <ul>
                                <li>Multiple header layouts</li>
                                <li>Responsive Design</li>
                                <li>Nice Parallax Effect</li>
                                <li>Easy to Customize</li>
                                <li>Retina Ready</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="list_style_2 color_blue">
                            <ul>
                                <li>Modern Framework</li>
                                <li>Full Documentation</li>
                                <li>Amazing Features</li>
                                <li>Pixel Perfect</li>
                                <li>Unique Design</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12"> 
                <div class="mt-4 mt-lg-0 animation" data-animation="fadeInRight" data-animation-delay="0.1s">
                    <img src="{{ url('frontend/assets/images/about_img2.png') }}" alt="aboutimg"/> 
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION INFORMATION --> 

<!-- START SECTION COUNTER --> 
<section class="counter_wrap overlay_bg3 parallax_bg" data-parallax-bg-image="{{ ('frontend/assets/images/counter_bg1.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                <div class="box_counter counter_style2 text-center">
                    <i class="ion-coffee"></i>
                    <h3 class="counter_text"><span class="counter">800</span>+</h3>
                    <p>Cups of Coffee</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                <div class="box_counter counter_style2 text-center">
                    <i class="ion-clock"></i>
                    <h3 class="counter_text"><span class="counter">1700</span></h3>
                    <p>Hours of Development</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.7s">
                <div class="box_counter counter_style2 text-center">
                    <i class="ion-easel"></i>
                    <h3 class="counter_text"><span class="counter">1200</span>+</h3>
                    <p>Project Complete</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                <div class="box_counter counter_style2 text-center">
                    <i class="ion-android-contacts"></i>
                    <h3 class="counter_text"><span class="counter">1500</span>+</h3>
                    <p>Happy Clients</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION COUNTER -->

<!-- START SECTION PORTFOLIO -->
<section class="small_pb">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-9 animation" data-animation="fadeInUp" data-animation-delay="0.1s">
                <div class="heading_s1 text-center">
                    <h2>Our Letest works</h2>
                </div>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="cleafix small_divider"></div>
            </div>
        </div>
        <div class="row mb-3 mb-sm-5">
            <div class="col-md-12 text-center animation" data-animation="fadeInUp" data-animation-delay="0.1s">
                <ul class="list_none portfolio_filter filter_tab1">
                    <li><a href="#" class="current" data-filter="*">all</a></li>
                    <li><a href="#" data-filter=".brands">Brands</a></li>
                    <li><a href="#" data-filter=".design">Design</a></li>
                    <li><a href="#" data-filter=".web">Web</a></li>
                    <li><a href="#" data-filter=".adv">Advertising</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.1s">
                <ul class="portfolio_container gutter_small work_col4 portfolio_gallery portfolio_style1">
                    <li class="grid-sizer"></li>
                    <!-- START PORTFOLIO ITEM -->
                    <li class="portfolio-item design web">
                        <div class="portfolio_item">
                            <a href="#" class="image_link">
                                <img src="{{ url('frontend/assets/images/portfolio_item_small1_360X240.jpg') }}" alt="image">
                            </a>
                            <div class="portfolio_content">
                                <div class="link_container">
                                    <a href="assets/images/portfolio_item1.jpg" class="image_popup"><i class="ion-image"></i></a>
                                    <a href="#"><i class="ion-plus"></i></a>
                                </div>
                                <h5><a href="#">Website Design</a></h5>
                                <p>It's a long established fact that a reader will be readable content of a page.</p>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                    <!-- START PORTFOLIO ITEM -->
                    <li class="portfolio-item brands web adv">
                        <div class="portfolio_item">
                            <a href="#" class="image_link">
                                <img src="{{ url('frontend/assets/images/portfolio_item_small2_360X240.jpg') }}" alt="image">
                            </a>
                            <div class="portfolio_content">
                                <div class="link_container">
                                    <a href="http://www.youtube.com/watch?v=7e90gBu4pas" class="video_popup"><i class="ion-ios-play"></i></a>
                                    <a href="#"><i class="ion-plus"></i></a>
                                </div>
                                <h5><a href="#">Website Design</a></h5>
                                <p>There are many variations of available, but the majority have suffered alteration</p>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                    <!-- START PORTFOLIO ITEM -->
                    <li class="portfolio-item brands design">
                        <div class="portfolio_item">
                            <div class="portfolio_slider owl-carousel owl-theme dots_white" data-autoplay="true" data-loop="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay-timeout="3000">
                                <a href="#" class="image_link">
                                    <img src="{{ url('frontend/assets/images/portfolio_item_small3_360X240.jpg') }}" alt="image">
                                </a>
                                <a href="#" class="image_link">
                                    <img src="{{ url('frontend/assets/images/portfolio_item_small23_360X240.jpg') }}" alt="image">
                                </a>
                            </div>
                            <div class="portfolio_content">
                                <div class="link_container">
                                    <a href="assets/images/portfolio_item3.jpg" class="image_popup"><i class="ion-images"></i></a>
                                    <a href="assets/images/portfolio_item23.jpg" class="image_popup d-none"></a>
                                    <a href="#"><i class="ion-plus"></i></a>
                                </div>
                                <h5><a href="#">Website Design</a></h5>
                                <p>making this the first true generator on the Internet. It uses a dictionary</p>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                    <!-- START PORTFOLIO ITEM -->
                    <li class="portfolio-item brands design web adv">
                        <div class="portfolio_item">
                            <a href="#" class="image_link">
                                <img src="{{ url('frontend/assets/images/portfolio_item_small4_360X240.jpg') }}" alt="image">
                            </a>
                            <div class="portfolio_content">
                                <div class="link_container">
                                    <a href="assets/images/portfolio_item4.jpg" class="image_popup"><i class="ion-image"></i></a>
                                    <a href="#"><i class="ion-plus"></i></a>
                                </div>
                                <h5><a href="#">Website Design</a></h5>
                                <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself</p>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                    <!-- START PORTFOLIO ITEM -->
                    <li class="portfolio-item brands adv">
                        <div class="portfolio_item">
                            <a href="#" class="image_link">
                                <img src="{{ url('frontend/assets/images/portfolio_item_small5_360X240.jpg') }}" alt="image">
                            </a>
                            <div class="portfolio_content">
                                <div class="link_container">
                                    <a href="https://vimeo.com/7449107" class="video_popup"><i class="ion-ios-play"></i></a>
                                    <a href="#"><i class="ion-plus"></i></a>
                                </div>
                                <h5><a href="#">Website Design</a></h5>
                                <p>Nam libero tempore cum soluta nobis eligendi optio nihil impedit quo minus</p>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                    <!-- START PORTFOLIO ITEM -->
                    <li class="portfolio-item brands web">
                        <div class="portfolio_item">
                            <div class="portfolio_slider owl-carousel owl-theme dots_white" data-autoplay="true" data-loop="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay-timeout="3500">
                                <a href="#" class="image_link">
                                    <img src="{{ url('frontend/assets/images/portfolio_item_small7_360X240.jpg') }}" alt="image">
                                </a>
                                <a href="#" class="image_link">
                                    <img src="{{ url('frontend/assets/images/portfolio_item_small24_360X240.jpg') }}" alt="image">
                                </a>
                            </div>
                            <div class="portfolio_content">
                                <div class="link_container">
                                    <a href="assets/images/portfolio_item7.jpg" class="image_popup"><i class="ion-images"></i></a>
                                    <a href="assets/images/portfolio_item24.jpg" class="image_popup d-none"><i class="ion-image"></i></a>
                                    <a href="#"><i class="ion-plus"></i></a>
                                </div>
                                <h5><a href="#">Website Design</a></h5>
                                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum saepe eveniet</p>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                    <!-- START PORTFOLIO ITEM -->
                    <li class="portfolio-item brands design web adv">
                        <div class="portfolio_item">
                            <a href="#" class="image_link">
                                <img src="{{ url('frontend/assets/images/portfolio_item_small6_360X240.jpg') }}" alt="image">
                            </a>
                            <div class="portfolio_content">
                                <div class="link_container">
                                    <a href="assets/images/portfolio_item6.jpg" class="image_popup"><i class="ion-image"></i></a>
                                    <a href="#"><i class="ion-plus"></i></a>
                                </div>
                                <h5><a href="#">Website Design</a></h5>
                                <p>which is the same as saying through shrinking from toil and pain.</p>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                    <!-- START PORTFOLIO ITEM -->
                    <li class="portfolio-item brands design web adv">
                        <div class="portfolio_item">
                            <a href="#" class="image_link">
                                <img src="{{ url('frontend/assets/images/portfolio_item_small8_360X240.jpg') }}" alt="image">
                            </a>
                            <div class="portfolio_content">
                                <div class="link_container">
                                    <a href="assets/images/portfolio_item8.jpg" class="image_popup"><i class="ion-image"></i></a>
                                    <a href="#"><i class="ion-plus"></i></a>
                                </div>
                                <h5><a href="#">Website Design</a></h5>
                                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit molestiae consequatur</p>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION PORTFOLIO -->

<!-- START SECTION TESTIMONIAL -->
<section class="small_pt">	
    <div class="container">
        <div class="row">
            <div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.1s">
                <div class="heading_s1 text-center">
                    <h2>Clients Testimonials</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="cleafix small_divider"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.1s">
                <div class="testimonial_slider testimonial_style2 carousel_slide3 owl-carousel owl-theme" data-center="true" data-margin="30" data-loop="true" data-autoplay="true">
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial_img">
                                <img class="rounded-circle m-auto" src="{{ url('frontend/assets/images/user1.jpg') }}" alt="user"/>
                            </div>
                            <div class="testi_meta">
                                <h6>Lissa Castro</h6>
                                <span>Co-Founder</span>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, quaeillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial_img">
                                <img class="rounded-circle m-auto" src="{{ url('frontend/assets/images/user2.jpg') }}" alt="user"/>
                            </div>
                            <div class="testi_meta">
                                <h6>Alden Smith</h6>
                                <span>Creative Designer</span>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, quaeillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial_img">
                                <img class="rounded-circle m-auto" src="{{ url('frontend/assets/images/user3.jpg') }}" alt="user"/>
                            </div>
                            <div class="testi_meta">
                                <h6>Daisy Lana</h6>
                                <span>Creative Director</span>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, quaeillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial_img">
                                <img class="rounded-circle m-auto" src="{{ url('frontend/assets/images/user4.jpg') }}" alt="user"/>
                            </div>
                            <div class="testi_meta">
                                <h6>Alfred Amos</h6>
                                <span>Creative Director</span>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, quaeillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION TESTIMONIAL -->

<!-- START SECTION CALL TO ACTION -->
<section class="cta_section_small bg_blue px-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 text_white animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                <h2 class="">We always stay with our clients.</h2>
                <p class="mb-md-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim.</p>
            </div>
            <div class="col-md-4 text-md-right animation" data-animation="fadeInUp" data-animation-delay="0.6s">	
                <a href="#" class="btn btn-outline-white">Contact Us</a>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CALL TO ACTION -->

<!-- START SECTION BLOG -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading_s1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.1s">
                    <h2>Our Letest Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="clearfix small_divider"></div>
            </div>
        </div>
        <div class="row blog_wrap justify-content-center animation" data-animation="fadeInUp" data-animation-delay="0.1s">
            <div class="col-lg-4 col-md-6 mb-md-4 mb-2 pb-2">
                <div class="blog_post blog_style1">
                    <div class="blog_img">
                        <a href="#">
                            <img src="{{ url('frontend/assets/images/blog_small_img1_350X198.jpg') }}" alt="blog_small_img1_350X198">
                        </a>
                    </div>
                    <div class="blog_content bg-white">
                        <div class="blog_text">
                            <h6 class="blog_title"><a href="#">Why are tickets to fly to Lagos expensive?</a></h6>
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="ion-calendar"></i> April 14, 2018</a></li>
                                <li><a href="#"><i class="ion-chatboxes"></i> 2 Comment</a></li>
                            </ul>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                            <a href="#" class="text-capitalize">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-md-4 mb-2 pb-2">
                <div class="blog_post blog_style1">
                    <div class="blog_img">
                        <a href="#">
                            <img src="{{ url('frontend/assets/images/blog_small_img2_350X198.jpg') }}" alt="blog_small_img2_350X198">
                        </a>
                    </div>
                    <div class="blog_content bg-white">
                        <div class="blog_text">
                            <h6 class="blog_title"><a href="#">A cheap and flexible solution for those who want a starter package </a></h6>
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="ion-calendar"></i> April 14, 2018</a></li>
                                <li><a href="#"><i class="ion-chatboxes"></i> 2 Comment</a></li>
                            </ul>
                            <p>Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                            <a href="#" class="text-capitalize">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-md-4 mb-2 pb-2">
                <div class="blog_post blog_style1">
                    <div class="blog_img">
                        <a href="#">
                            <img src="{{ url('frontend/assets/images/blog_small_img3_350X198.jpg') }}" alt="blog_small_img3_350X198">
                        </a>
                    </div>
                    <div class="blog_content bg-white">
                        <div class="blog_text">
                            <h6 class="blog_title"><a href="#">But I must explain to you how all this mistaken idea of denouncing</a></h6>
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="ion-calendar"></i> April 14, 2018</a></li>
                                <li><a href="#"><i class="ion-chatboxes"></i> 2 Comment</a></li>
                            </ul>
                            <p>It uses a dictionary of over combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable</p>
                            <a href="#" class="text-capitalize">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BLOG -->

<!-- START SECTION CLIENT LOGO -->
<section class="light_gray_bg small_pt small_pb">
    <div class="container">
        <div class="row">
            <div class="col-md-12 animation" data-animation="fadeInDown" data-animation-delay="0.1s">
                <div class="cl_logo_slider owl-carousel owl-theme" data-margin="30" data-loop="true" data-autoplay="true" data-dots="false" data-autoplay-timeout="2000">
                    <div class="item">
                        <a href="#"><img src="{{ url('frontend/assets/images/cl_logo1.png') }}" alt="cl_logo1"/></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="{{ url('frontend/assets/images/cl_logo2.png') }}" alt="cl_logo2"/></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="{{ url('frontend/assets/images/cl_logo3.png') }}" alt="cl_logo3"/></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="{{ url('frontend/assets/images/cl_logo4.png') }}" alt="cl_logo4"/></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="{{ url('frontend/assets/images/cl_logo5.png') }}" alt="cl_logo5"/></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="{{ url('frontend/assets/images/cl_logo6.png') }}" alt="cl_logo6"/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection