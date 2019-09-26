@extends('frontend.layout.app')
@section('content')
<!-- START SECTION BANNER -->
<section class="banner_section parallax_bg overlay_bg" data-parallax-bg-image="{{ url('public/frontend/assets/images/portfolio_signle_bg1.jpg') }}">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-12 col-sm-12 text-center">
                <div class="banner_content text_white">
                    <h2 class="animation text-uppercase" data-animation="fadeInUp" data-animation-delay="0.4s">expedita distinctio</h2>
                    <p class="animation my-4" data-animation="fadeInUp" data-animation-delay="0.6s">Lorem is simply text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER --> 

<!-- START SECTION PORTFOLIO DETAIL -->
<section class="small_pb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-7 mb-4 mb-md-0 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <h5>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur</h5>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem</p>
                <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise</p>
                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences</p>
                <a href="#" class="btn btn-outline-black btn-sm">Launch Website</a>
            </div>
            <div class="col-lg-4 col-md-5 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                <div class="bg_blue p-3 p-md-4">
                    <ul class="list_none portfolio_info_box pr_info_text_white">
                        <li><span class="text-uppercase">CLIENT</span>Alea Brooks</li>
                        <li><span class="text-uppercase">Date</span>Aprile 2018</li>
                        <li><span class="text-uppercase">Category</span>Design, Branding</li>
                        <li><span class="text-uppercase">PROJECT link</span>www.sitename.com</li>
                        <li><span class="text-uppercase">SHARE </span>
                            <ul class="list_none social_icons border_social social_white rounded_social">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION PORTFOLIO DETAIL -->

<!-- START SECTION VIDEO -->
<section class="small_pt small_pb overflow_hide">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 p-0 animation" data-animation="fadeInLeft" data-animation-delay="0.2s"> 
                <div class="h-100 background_bg overlay_bg2 md-height-300" data-img-src="{{ url('public/frontend/assets/images/about_img3.jpg') }}">
                    <a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="video_popup video_play"><img class="bounce_img" src="{{ url('public/frontend/assets/images/play-icon.png') }}" alt="play-icon"></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 p-0 animation" data-animation="fadeInRight" data-animation-delay="0.4s">
                <div class="bg-dark h-100 d-flex align-items-center padding_eight_all text_white">
                    <div>
                        <h2 class="font-weight-light mb-3">Create <span class="font-weight-bold">smart and easy</span> website</h2>
                        <span class="highlight_txt text-light">Nam nec tellus a odio tincidunt auctor a ornare odio.</span>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                        <a href="#" class="btn btn-outline-white btn-radius">Launch Website</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION VIDEO -->

<!-- START SECTION PORTFOLIO SLIDER -->
<section class="small_pt">
    <div class="container">
        <div class="row">	
            <div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <ul class="list_none carousel_slide1 owl-carousel owl-theme" data-autoheight="true" data-margin="15" data-dots="false" data-nav="true" data-loop="true" data-autoplay-timeout="3000">
                    <li>
                        <img src="{{ url('public/frontend/assets/images/portfolio_item1.jpg') }}" alt="image">
                    </li>
                    <li>
                        <img src="{{ url('public/frontend/assets/images/portfolio_item2.jpg') }}" alt="image">
                    </li>
                    <li>
                        <img src="{{ url('public/frontend/assets/images/portfolio_item3.jpg') }}" alt="image">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION PORTFOLIO SLIDER -->

<!-- START SECTION NAVIGATION BAR -->
<section class="p-0 post_navigation">
    <div class="container">
        <div class="row align-items-center justify-content-between border-top border-bottom py-4 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            <div class="col-auto">
                <a href="#">
                    <div class="d-flex align-items-center">
                        <i class="ion-ios-arrow-thin-left mr-3"></i>
                        <div class="d-none d-md-block">
                            <span class="text-uppercase nav_meta">PREVIOUS PROJECT</span>
                            <span>blanditiis praesentium</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-auto">
                <a href="#">
                    <i class="ion-grid"></i>
                </a>
            </div>
            <div class="col-auto">
                <a href="#">
                    <div class="d-flex align-items-center flex-row-reverse text-right">
                        <i class="ion-ios-arrow-thin-right ml-3"></i>
                        <div class="d-none d-md-block">
                            <span class="text-uppercase nav_meta">Next PROJECT</span>
                            <span>voluptatum deleniti</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION NAVIGATION BAR -->

<!-- START SECTION RELATED PROJECTS -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s1">
                    <h2>Related projects</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                <ul class="portfolio_gallery portfolio_style5 carousel_slide4 owl-carousel owl-theme" data-margin="15" data-dots="false" data-nav="true" data-rewind="true">
                    <!-- START PORTFOLIO ITEM -->
                    <li class="portfolio-item">
                        <div class="portfolio_item">
                            <a href="#" class="image_link">
                                <img src="{{ url('public/frontend/assets/images/portfolio_item_small1_360X240.jpg') }}" alt="image">
                            </a>
                            <div class="portfolio_content">
                                <div class="link_container">
                                    <a href="assets/images/portfolio_item1.jpg') }}" class="image_popup"><i class="ion-image"></i></a>
                                    <a href="#"><i class="ion-plus"></i></a>
                                </div>
                                <h5><a href="#">Website Design</a></h5>
                                <p>It's a long established fact that a reader will be readable content of a page.</p>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                    <!-- START PORTFOLIO ITEM -->
                    <li class="portfolio-item">
                        <div class="portfolio_item">
                            <a href="#" class="image_link">
                                <img src="{{ url('public/frontend/assets/images/portfolio_item_small2_360X240.jpg') }}" alt="image">
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
                    <li class="portfolio-item">
                        <div class="portfolio_item">
                            <a href="#" class="image_link">
                                <img src="{{ url('public/frontend/assets/images/portfolio_item_small3_360X240.jpg') }}" alt="image">
                            </a>
                            <div class="portfolio_content">
                                <div class="link_container">
                                    <a href="assets/images/portfolio_item3.jpg') }}" class="image_popup"><i class="ion-images"></i></a>
                                    <a href="assets/images/portfolio_item23.jpg') }}" class="image_popup d-none"></a>
                                    <a href="#"><i class="ion-plus"></i></a>
                                </div>
                                <h5><a href="#">Website Design</a></h5>
                                <p>making this the first true generator on the Internet. It uses a dictionary</p>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                    <!-- START PORTFOLIO ITEM -->
                    <li class="portfolio-item">
                        <div class="portfolio_item">
                            <a href="#" class="image_link">
                                <img src="{{ url('public/frontend/assets/images/portfolio_item_small4_360X240.jpg') }}" alt="image">
                            </a>
                            <div class="portfolio_content">
                                <div class="link_container">
                                    <a href="assets/images/portfolio_item4.jpg') }}" class="image_popup"><i class="ion-image"></i></a>
                                    <a href="#"><i class="ion-plus"></i></a>
                                </div>
                                <h5><a href="#">Website Design</a></h5>
                                <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself</p>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM -->
                    <!-- START PORTFOLIO ITEM -->
                    <li class="portfolio-item">
                        <div class="portfolio_item">
                            <a href="#" class="image_link">
                                <img src="{{ url('public/frontend/assets/images/portfolio_item_small5_360X240.jpg') }}" alt="image">
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
                    <li class="portfolio-item">
                        <div class="portfolio_item">
                            <a href="#" class="image_link">
                                <img src="{{ url('public/frontend/assets/images/portfolio_item_small6_360X240.jpg') }}" alt="image">
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
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- START SECTION RELATED PROJECTS -->
@endsection