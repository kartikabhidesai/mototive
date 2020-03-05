@extends('frontend.layout.app')
@section('content')
<!-- START SECTION BANNER -->
<section class="page-title-light breadcrumb_section background_bg blue_overlay_bg" data-img-src="{{ url('public/frontend/assets/images/breadcrumb_bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="page-title">
                    <h1>Read More Blog</h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ asset('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Read More Blog</li>
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
        <div class="row">
            <div class="col-lg-9">
                <div class="single_post">
                    @foreach($blog as $result)
                    <div class="blog_img">
                        <a href="#">
                            <img src="{{ url('public/uploads/blog/'.$result->image) }}" alt="blog_img1">
                        </a>
                    </div>
                    <div class="blog_content bg-white">
                        <div class="blog_text">

                            <h2>{{ $result->title }}</h2>
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="ion-calendar"></i>{{ strftime( '%Y-%m-%d', strtotime($result->created_at)) }}</a></li>
                                <li><a href="#"><i class="ion-chatboxes"></i> 2 Comment</a></li>
                            </ul>
                            <p>{{ $result->content }}</p>
                            <div class="py-4 blog_post_footer">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-md-8 mb-3 mb-md-0">
                                        <div class="tags">
                                            @foreach($obj_Blog_category as $value)
                                            <a href="#" data-id='{{ $value->id }}'>{{ $value->name }}</a>
                                            @endforeach
                                        </div>
                                    </div>
<!--                                    <div class="col-md-4">
                                        <ul class="list_none social_icons border_social rounded_social">
                                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                            <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                        </ul>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
<!--                <div class="border-top border-bottom py-2 py-md-4 post_navigation">
                    <div class="row align-items-center justify-content-center justify-content-sm-between">
                        <div class="col-auto">
                            <a href="#">
                                <div class="d-flex align-items-center">
                                    <i class="ion-ios-arrow-thin-left mr-3"></i>
                                    <div>
                                        <span>blanditiis praesentium</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="#">
                                <div class="d-flex align-items-center flex-row-reverse text-right">
                                    <i class="ion-ios-arrow-thin-right ml-3"></i>
                                    <div>
                                        <span>voluptatum deleniti</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>-->
<!--                <div class="card mt-3 mt-md-5">
                    <div class="card-body">
                        <div class="author_img">
                            <img class="rounded-circle" src="assets/images/user1.jpg" alt="user1"/>
                        </div>
                        <div class="author_info">
                            <a href="#" class="mb-1 d-inline-block">Maria Redwood</a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>-->
<!--                <div class="related_post border-top">
                    <div class="comment-title mb-2 mb-sm-4">
                        <h5>Related posts</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-md-4 mb-2 pb-2">
                            <div class="blog_post blog_style1">
                                <div class="blog_img">
                                    <a href="#">
                                        <img src="assets/images/blog_small_img1_350X198.jpg" alt="blog_small_img1_350X198">
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
                        <div class="col-md-4 mb-md-4 mb-2 pb-2">
                            <div class="blog_post blog_style1">
                                <div class="blog_img">
                                    <a href="#">
                                        <img src="assets/images/blog_small_img2_350X198.jpg" alt="blog_small_img2_350X198">
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
                        <div class="col-md-4 mb-md-4 mb-2 pb-2">
                            <div class="blog_post blog_style1">
                                <div class="blog_img">
                                    <a href="#">
                                        <img src="assets/images/blog_small_img3_350X198.jpg" alt="blog_small_img3_350X198">
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
                    </div>
                </div>-->
                <div class="comment-area border-top">
                    <div class="comment-title mb-2 mb-sm-4">
                        <h5>(03) Comments</h5>
                    </div>
                    <ul class="list_none comment_list">
                        <li class="comment_info">
                            <div class="d-flex">
                                <div class="user_img">
                                    <img src="assets/images/user2.jpg" alt="user2">
                                </div>
                                <div class="comment_content">
                                    <div class="d-flex align-items-md-center">
                                        <div class="meta_data">
                                            <h6><a href="#">Walter Mark</a></h6>
                                            <div class="comment-time">MARCH 5, 2018, 6:05 PM</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="comment-reply"><i class="ion-reply-all"></i>Reply</a>
                                        </div>
                                    </div>
                                    <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire that the cannot foresee the pain and trouble that.</p>
                                </div>
                            </div>
                        </li>
                        <li class="comment_info reply">
                            <div class="d-flex">
                                <div class="user_img">
                                    <img src="assets/images/user3.jpg" alt="user3">
                                </div>
                                <div class="comment_content">
                                    <div class="d-flex align-items-md-center">
                                        <div class="meta_data">
                                            <h6><a href="#">Sandhya Rani</a></h6>
                                            <div class="comment-time">april 8, 2018, 5:15 PM</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="comment-reply"><i class="ion-reply-all"></i>Reply</a>
                                        </div>
                                    </div>
                                    <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire that the cannot foresee the pain and trouble that.</p>
                                </div>
                            </div>
                        </li>
                        <li class="comment_info">
                            <div class="d-flex">
                                <div class="user_img">
                                    <img src="assets/images/user4.jpg" alt="user4">
                                </div>
                                <div class="comment_content">
                                    <div class="d-flex align-items-md-center">
                                        <div class="meta_data">
                                            <h6><a href="#">Laura Sandel</a></h6>
                                            <div class="comment-time">april 15, 2018, 10:30 PM</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="comment-reply"><i class="ion-reply-all"></i>Reply</a>
                                        </div>
                                    </div>
                                    <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire that the cannot foresee the pain and trouble that.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="comment-title mb-2 mb-sm-4">
                        <h5>Write a comment</h5>
                    </div>
                    <form class="field_form" name="enq" method="post">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <input name="name" class="form-control" id="first-name" placeholder="Your Name" required="required" type="text">
                            </div>
                            <div class="form-group col-md-4">
                                <input name="email" class="form-control" id="email" placeholder="Your Email" required="required" type="email">
                            </div>
                            <div class="form-group col-md-4">
                                <input name="website" class="form-control" id="website" placeholder="Your Website" required="required" type="text">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea rows="3" name="message" class="form-control" id="description" placeholder="Your Comment" required="required"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <button value="Submit" name="submit" id="submitButton" class="btn btn-default" title="Submit Your Message!" type="submit">Submit</button>
                                <div>
                                    <div class="alert-msg text-center" id="alert-msg"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 mt-lg-0 mt-4 pt-3 pt-lg-0">
                <div class="sidebar">
<!--                    <div class="widget">
                        <div class="newsletter_form">
                            <form> 
                                <div class="outline_input-black">
                                    <input required="" placeholder="Search..." type="text">
                                </div>
                                <button type="submit" title="Subscribe" class="btn btn-submit border-0" name="submit" value="Submit">
                                    <span class="ti-search"></span>
                                </button>
                            </form>
                        </div>
                    </div>-->
                    <div class="widget">
                        <h5 class="widget_title blogfooter">Recent Posts</h5>
                        <ul class="recent_post border_bottom_dash list_none">
<!--                            <li>
                                <div class="post_footer">
                                    <div class="post_img">
                                        <a href="#"><img src="assets/images/letest_post1.jpg" alt="letest_post1"></a>
                                    </div>
                                    <div class="post_content">
                                        <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                        <p class="small m-0">April 14, 2018</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post_footer">
                                    <div class="post_img">
                                        <a href="#"><img src="assets/images/letest_post2.jpg" alt="letest_post2"></a>
                                    </div>
                                    <div class="post_content">
                                        <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                        <p class="small m-0">April 14, 2018</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post_footer">
                                    <div class="post_img">
                                        <a href="#"><img src="assets/images/letest_post3.jpg" alt="letest_post3"></a>
                                    </div>
                                    <div class="post_content">
                                        <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                        <p class="small m-0">April 14, 2018</p>
                                    </div>
                                </div>
                            </li>-->
                        </ul>
                    </div>
<!--                    <div class="widget">
                        <h5 class="widget_title">Categories</h5>
                        <ul class="list_none widget_categories border_bottom_dash">
                            <li><a href="#"><span class="categories_name">Design</span><span class="categories_num">(9)</span></a></li>
                            <li><a href="#"><span class="categories_name">Lifestyle</span><span class="categories_num">(6)</span></a></li>
                            <li><a href="#"><span class="categories_name">Photos</span><span class="categories_num">(4)</span></a></li>
                            <li><a href="#"><span class="categories_name">Creative</span><span class="categories_num">(7)</span></a></li>
                            <li><a href="#"><span class="categories_name">Branding</span><span class="categories_num">(12)</span></a></li>
                        </ul>
                    </div>-->
<!--                    <div class="widget">
                        <h5 class="widget_title">tags</h5>
                        <div class="tags">
                            <a href="#">General</a>
                            <a href="#">Design</a>
                            <a href="#">jQuery</a>
                            <a href="#">Branding</a>
                            <a href="#">Modern</a>
                            <a href="#">Blog</a>
                            <a href="#">Quotes</a>
                            <a href="#">Advertisement</a>
                        </div>
                    </div>-->
<!--                    <div class="widget">
                        <h5 class="widget_title">Archive</h5>
                        <ul class="list_none widget_archive border_bottom_dash">
                            <li><a href="#"><span class="archive_year">June 2017</span><span class="archive_num">(12)</span></a></li>
                            <li><a href="#"><span class="archive_year">May 2017</span><span class="archive_num">(5)</span></a></li>
                            <li><a href="#"><span class="archive_year">March 2017</span><span class="archive_num">(6)</span></a></li>
                            <li><a href="#"><span class="archive_year">January 2017</span><span class="archive_num">(7)</span></a></li>
                            <li><a href="#"><span class="archive_year">April 2016</span><span class="archive_num">(10)</span></a></li>
                        </ul>
                    </div>-->
                    <div class="widget">
                        <h5 class="widget_title">Newsletter</h5>
                        <div class="newsletter_form">
                            <form> 
                                <div class="outline_input-black">
                                    <input required="" placeholder="Enter Email Address" type="text">
                                </div>
                                <button type="submit" title="Subscribe" class="btn btn-submit border-0" name="submit" value="Submit">
                                    <span class="ti-email"></span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- END SECTION BLOG -->
@endsection