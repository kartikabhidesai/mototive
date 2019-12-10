@extends('frontend.layout.app')
@section('content')
<!-- START SECTION BANNER -->
<section class="page-title-light breadcrumb_section gray_bg background_bg overlay_bg2" data-img-src="{{ url('public/frontend/assets/images/breadcrumb_bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="page-title">
                    <h1>Blog</h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ asset('/') }}">Home</a></li>
                        <li class="breadcrumb-item">Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER --> 

<!-- START SECTION BLOG -->
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="row blog_thumbs">
                    <div class="col-md-12 mb-md-4 mb-2 pb-2">
                        <div class="blog_post">
                            <div class="blog_img">
                                <a href="#">
                                    <img src="{{ url('public/frontend/assets/images/blog_small_img1_350X198.jpg') }}" alt="blog_small_img1_350X198">
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
                                    <a href="{{ route('blogreadmore') }}" class="text-capitalize">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-md-4 mb-2 pb-2">
                        <div class="blog_post">
                            <div class="blog_img">
                                <a href="#">
                                    <img src="{{ url('public/frontend/assets/images/blog_small_img2_350X198.jpg') }}" alt="blog_small_img2_350X198">
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
                    <div class="col-md-12 mb-md-4 mb-2 pb-2">
                        <div class="blog_post">
                            <div class="blog_img">
                                <a href="#">
                                    <img src="{{ url('public/frontend/assets/images/blog_small_img3_350X198.jpg') }}" alt="blog_small_img3_350X198">
                                </a>
                            </div>
                            <div class="blog_content bg-white">
                                <div class="blog_text">
                                    <h6 class="blog_title"><a href="#">But I must explain to you how all this mistaken idea of denouncing</a></h6>
                                    <ul class="list_none blog_meta">
                                        <li><a href="#"><i class="ion-calendar"></i> April 14, 2018</a></li>
                                        <li><a href="#"><i class="ion-chatboxes"></i> 2 Comment</a></li>
                                    </ul>
                                    <p>It uses a dictionary of over combined with a handful of model sentence structures, to generate Lorem Ipsum which looks</p>
                                    <a href="#" class="text-capitalize">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-md-4 mb-2 pb-2">
                        <div class="blog_post">
                            <div class="blog_img">
                                <div class="fit-videos">
                                    <iframe src="https://player.vimeo.com/video/231236542?title=0&amp;byline=0&amp;portrait=0" width="540" height="304" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="blog_content bg-white">
                                <div class="blog_text">
                                    <h6 class="blog_title"><a href="#">The Problem With Typefaces on the Web</a></h6>
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
                    <div class="col-md-12 mb-md-4 mb-2 pb-2">
                        <div class="blog_post">
                            <div class="blog_img">
                                <iframe width="100%" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/118951274&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                            </div>
                            <div class="blog_content bg-white">
                                <div class="blog_text">
                                    <h6 class="blog_title"><a href="#">How to Choose the Best Font for Your Blog's Body Copy</a></h6>
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
                    <div class="col-md-12 mb-md-4 mb-2 pb-2">
                        <div class="blog_post">
                            <div class="blog_img">
                                <div class="carousel_slide1 owl-carousel owl-theme dots_white" data-autoheight="true" data-autoplay="true" data-loop="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay-timeout="3000">
                                    <a href="#">
                                        <img src="{{ url('public/frontend/assets/images/blog_small_img4_350X198.jpg') }}" alt="blog_small_img4_350X198">
                                    </a>
                                    <a href="#">
                                        <img src="{{ url('public/frontend/assets/images/blog_small_img5_350X198.jpg') }}" alt="blog_small_img5_350X198">
                                    </a>
                                </div>
                            </div>
                            <div class="blog_content bg-white">
                                <div class="blog_text">
                                    <h6 class="blog_title"><a href="#">dignissimos ducimus qui blanditiis praesentium voluptatum deleniti</a></h6>
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
                    <div class="col-md-12 mb-md-4 mb-2 pb-2">
                        <div class="blog_post">
                            <div class="blog_img">
                                <a href="#">
                                    <img src="{{ url('public/frontend/assets/images/blog_small_img6_350X198.jpg') }}" alt="blog_small_img6_350X198">
                                </a>
                            </div>
                            <div class="blog_content bg-white">
                                <div class="blog_text">
                                    <h6 class="blog_title"><a href="#">who are so beguiled and demoralized by the charms of pleasure of the moment.</a></h6>
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
                    <div class="col-md-12 mb-md-4 mb-2 pb-2">
                        <div class="blog_post">
                            <div class="blog_img">
                                <div class="fit-videos">
                                    <iframe width="540" height="304" src="https://www.youtube.com/embed/7e90gBu4pas" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="blog_content bg-white">
                                <div class="blog_text">
                                    <h6 class="blog_title"><a href="#">which is the same as saying through shrinking from toil and pain</a></h6>
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
                <div class="row">
                    <div class="col-12 mt-4">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="ion-ios-arrow-thin-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="ion-ios-arrow-thin-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BLOG -->
@endsection