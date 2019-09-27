@extends('frontend.layout.app')
@section('content')
<!-- START SECTION BANNER -->
<section class="background_bg breadcrumb_section overlay_bg2 page-title-light" data-img-src="{{ url('public/frontend/assets/images/about_bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="page-title">
                    <h1>About Us</h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us 2</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER --> 

<!-- START SECTION ABOUT US -->
<section class="small_pb overflow_hide">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12 p-lg-0 animation" data-animation="fadeInLeft" data-animation-delay="0.2s">
                <div class="small_padding bg-dark h-100 text_white d-lg-flex justify-content-center flex-lg-column">
                    <div class="heading_s3 mb-3"> 
                        <h3>About The Anger</h3>
                    </div>
                    <p>Nam eget neque pellentesque, efficitur neque at, ornare orci. Morbi convallis a eros fermentum rhoncus. Morbi convallis a eros fermentum rhoncus lorem. Vestibulum ligula orci, volutpat id aliquet eget, consectetur eget ante. Duis pharetra for nec rhoncus felis sagittis nec amet ultricies lorem.</p>
                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.Iipsum dolor sit amet, consectetur adipiscing elitllus blandit massa enim.</p>
                </div>
            </div>
            <div class="col-lg-4 p-lg-0 animation" data-animation="zoomIn" data-animation-delay="0.2s">
                <div class="h-100 background_bg md-height-300" data-img-src="{{ url('public/frontend/assets/images/about_img7.jpg') }}"></div>
            </div>
            <div class="col-lg-4 p-lg-0 animation" data-animation="fadeInRight" data-animation-delay="0.2s">
                <div class="small_padding bg-dark h-100 text_white d-lg-flex justify-content-center flex-lg-column">
                    <div class="skill_content pr_style1">
                        <div class="progrees_bar_text">
                            <b>Web Hosting</b>
                        </div>
                        <div class="progress">
                            <div class="count_pr"><span class="counter">70</span>%</div>
                            <div class="progress-bar d-block" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="skill_content pr_style1">
                        <div class="progrees_bar_text">
                            <b>Development</b>
                        </div>
                        <div class="progress">
                            <div class="count_pr"><span class="counter">50</span>%</div>
                            <div class="progress-bar d-block" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="skill_content pr_style1">
                        <div class="progrees_bar_text">
                            <b>Web Design</b>
                        </div>
                        <div class="progress">
                            <div class="count_pr"><span class="counter">80</span>%</div>
                            <div class="progress-bar d-block" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="skill_content pr_style1">
                        <div class="progrees_bar_text">
                            <b>Marketing</b>
                        </div>
                        <div class="progress">
                            <div class="count_pr"><span class="counter">40</span>%</div>
                            <div class="progress-bar d-block" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="skill_content pr_style1">
                        <div class="progrees_bar_text">
                            <b>Bussiness Strategy</b>
                        </div>
                        <div class="progress">
                            <div class="count_pr"><span class="counter">60</span>%</div>
                            <div class="progress-bar d-block" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT US --> 

<!-- START SECTION FEATURE -->
<section class="small_pt">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 mb-3 mb-lg-0 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s3 mb-3"> 
                    <h3>Why Choose Us</h3>
                </div>
                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
                <div class="list_style_4 color_blue">
                    <ul>
                        <li>Consectetur adipiscing elitllus blandit massa enim</li>
                        <li>Vestibulum ligula orci, volutpat id aliquet eget</li>
                        <li>Duis pharetra for nec rhoncus felis</li>
                        <li>ou need to be sure there isn't anything</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12"> 
                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-sm-6 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                        <div class="icon_box icon_box_style_2 mt-3">
                            <div class="box_icon">	
                                <i class="icon icon-display"></i>
                            </div>
                            <div class="icon_box_content">
                                <h5>Responsive Design</h5>
                                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                            </div>
                        </div>
                        <div class="icon_box icon_box_style_2 mt-3">
                            <div class="box_icon">	
                                <i class="icon icon-eye"></i>
                            </div>
                            <div class="icon_box_content">
                                <h5>Retina Ready</h5>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-sm-6 animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                        <div class="icon_box icon_box_style_2 mt-3">
                            <div class="box_icon">	
                                <i class="icon icon-equalizer2"></i>
                            </div>
                            <div class="icon_box_content">
                                <h5>Parallax Effact</h5>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                            </div>
                        </div>
                        <div class="icon_box icon_box_style_2 mt-3">
                            <div class="box_icon">	
                                <i class="icon icon-embed2"></i>
                            </div>
                            <div class="icon_box_content">
                                <h5>Html5 & Css3</h5>
                                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION FEATURE -->

<!-- START SECTION COUNTER --> 
<section class="counter_wrap light_gray_bg">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-5 text-center text-md-left mb-4 mb-md-0 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s3 mb-3 text-center text-md-left">
                    <h3>Get to know us!</h3>
                </div>
                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
                <a href="#" class="btn btn-outline-black">know More</a>
            </div>
            <div class="col-lg-6 offset-lg-1 col-md-7 col-sm-12 col-11 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                <div class="row overflow_hide">
                    <div class="col-6 couter_border counter_border_black">
                        <div class="box_counter counter_style1 counter_dark text-center">
                            <i class="ion-coffee"></i>
                            <h3 class="counter_text"><span class="counter">800</span>+</h3>
                            <p>Cups of Coffee</p>
                        </div>
                    </div>
                    <div class="col-6 couter_border counter_border_black">
                        <div class="box_counter counter_style1 counter_dark text-center">
                            <i class="ion-clock"></i>
                            <h3 class="counter_text"><span class="counter">1700</span></h3>
                            <p>Hours of Development</p>
                        </div>
                    </div>
                    <div class="col-6 couter_border counter_border_black">
                        <div class="box_counter counter_style1 counter_dark text-center">
                            <i class="ion-easel"></i>
                            <h3 class="counter_text"><span class="counter">1200</span>+</h3>
                            <p>Project Complete</p>
                        </div>
                    </div>
                    <div class="col-6 couter_border counter_border_black">
                        <div class="box_counter counter_style1 counter_dark text-center">
                            <i class="ion-android-contacts"></i>
                            <h3 class="counter_text"><span class="counter">1500</span>+</h3>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION COUNTER -->

<!-- START SECTION TESTIMONIAL -->
<section class="small_pb">	
    <div class="container">
        <div class="row">
            <div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s3 text-center">
                    <h3>Our Clients Say!</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="cleafix small_divider"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                <div class="testimonial_slider testimonial_style4 carousel_slide2 owl-carousel owl-theme" data-margin="30" data-loop="true" data-autoplay="true">
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial_img">
                                <img class="rounded-circle m-auto" src="{{ url('public/frontend/assets/images/user1.jpg') }}" alt="user"/>
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
                                <img class="rounded-circle m-auto" src="{{ url('public/frontend/assets/images/user2.jpg') }}" alt="user"/>
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
                                <img class="rounded-circle m-auto" src="{{ url('public/frontend/assets/images/user3.jpg') }}" alt="user"/>
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
                                <img class="rounded-circle m-auto" src="{{ url('public/frontend/assets/images/user4.jpg') }}" alt="user"/>
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

<!-- START SECTION TEAM -->
<section class="small_pt pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s3 text-center">
                    <h3>Our Team</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="cleafix small_divider"></div>
            </div>
        </div>
        <div class="row animation" data-animation="fadeInUp" data-animation-delay="0.4s">
            <div class="col-lg-3 col-sm-6 mb-lg-5 mb-sm-4 pb-sm-1 pb-3 text-center">
                <div class="team_box team_hover_style1 social_white light_gray_bg">
                    <div class="team_img">
                        <img src="{{ url('public/frontend/assets/images/team1.jpg') }}" alt="team1"/>
                        <ul class="list_none social_icons border_social">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="team_title">
                        <h5>Alea Brooks</h5>
                        <span>Software Developer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-lg-5 mb-sm-4 pb-sm-1 pb-3 text-center">
                <div class="team_box team_hover_style1 social_white light_gray_bg">
                    <div class="team_img">
                        <img src="{{ url('public/frontend/assets/images/team2.jpg') }}" alt="team2"/>
                        <ul class="list_none social_icons border_social">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="team_title">
                        <h5>Grace Wong</h5>
                        <span>Product designer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-lg-5 mb-sm-4 pb-sm-1 pb-3 text-center">
                <div class="team_box team_hover_style1 social_white light_gray_bg">
                    <div class="team_img">
                        <img src="{{ url('public/frontend/assets/images/team3.jpg') }}" alt="team3"/>
                        <ul class="list_none social_icons border_social">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="team_title">
                        <h5>Maria Redwood</h5>
                        <span>Developer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-lg-5 mb-sm-4 pb-sm-1 pb-3 text-center">
                <div class="team_box team_hover_style1 social_white light_gray_bg">
                    <div class="team_img">
                        <img src="{{ url('public/frontend/assets/images/team4.jpg') }}" alt="team4"/>
                        <ul class="list_none social_icons border_social">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="team_title">
                        <h5>james white</h5>
                        <span>Accountant</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION TEAM -->

<!-- START SECTION CALL TO ACTION -->
<section class="small_pt">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cta_section_small background_bg blue_overlay_bg position-relative fixed_bg animation" data-animation="fadeInUp" data-animation-delay="0.2s" data-img-src="{{ url('public/frontend/assets/images/cta_bg.jpg') }}">
                    <div class="row align-items-center">
                        <div class="col-md-8 text_white">
                            <h2 class="">We always stay with our clients.</h2>
                            <p class="mb-md-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim.</p>
                        </div>
                        <div class="col-md-4 text-md-right">	
                            <a href="#" class="btn btn-outline-white">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CALL TO ACTION -->

<!-- START SECTION CLIENT LOGO -->
<section class="small_pt small_pb light_gray_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="cl_logo_slider owl-carousel owl-theme" data-margin="30" data-loop="true" data-autoplay="true" data-dots="false" data-autoplay-timeout="2000">
                    <div class="item">
                        <a href="#"><img src="{{ url('public/frontend/assets/images/cl_logo1.png') }}" alt="cl_logo1"/></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="{{ url('public/frontend/assets/images/cl_logo2.png') }}" alt="cl_logo2"/></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="{{ url('public/frontend/assets/images/cl_logo3.png') }}" alt="cl_logo3"/></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="{{ url('public/frontend/assets/images/cl_logo4.png') }}" alt="cl_logo4"/></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="{{ url('public/frontend/assets/images/cl_logo5.png') }}" alt="cl_logo5"/></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="{{ url('public/frontend/assets/images/cl_logo6.png') }}" alt="cl_logo6"/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- START SECTION CLIENT LOGO -->

<!-- START SECTION CONTACT -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s2">
                    <span class="sub_title">Contact Us</span>
                    <h2>Get In touch</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                <ul class="contact_info contact_info_style1 list_none">
                    <li>
                        <span class="ti-location-pin"></span>
                        <address>G-106 Titanium City Center, Satellite, Ahmedabad, Gujarat, India</address>
                    </li>
                    <li>
                        <span class="ti-email"></span>
                        <a href="mailto:info@mototivewebsolution.com">info@mototivewebsolution.com</a>
                    </li>
                    <li>
                        <span class="ti-mobile"></span>
                        <p>+91 88666 20260</p>
                    </li>
                </ul>
                <span id="map" class="btn btn-outline-black mt-3">View Map</span>
            </div>
            <div class="col-lg-8 col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                <div class="clearfix large_divider d-none d-md-block"></div>
                <div class="clearfix medium_divider d-xl-none"></div>
                <div class="field_form">
                    <form method="post" name="enq">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input required="required" placeholder="Enter Name *" id="first-name" class="form-control" name="name" type="text">
                            </div>
                            <div class="form-group col-lg-6">
                                <input required="required" placeholder="Enter Email *" id="email" class="form-control" name="email" type="email">
                            </div>
                            <div class="form-group col-lg-12">
                                <input placeholder="Enter Subject" id="subject" class="form-control" name="subject" type="subject">
                            </div>
                            <div class="form-group col-lg-12">
                                <textarea required="required" placeholder="Message *" id="description" class="form-control" name="message" rows="3"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" title="Submit Your Message!" class="btn btn-default" id="submitButton" name="submit" value="Submit">Submit</button>
                            </div>
                            <div class="col-lg-12">
                                <div id="alert-msg" class="alert-msg text-center"></div>
                            </div>
                        </div>
                    </form>		
                </div>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193229.77301255226!2d-74.05531241936525!3d40.823236500441624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f613438663b5%3A0xce20073c8862af08!2sW+123rd+St%2C+New+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1533565007513" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CONTACT -->
@endsection