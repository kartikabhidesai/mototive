<footer class="overlay_bg3 background_bg" data-img-src="{{ url('public/frontend/assets/images/footer_bg.jpg') }}">
	<div class="top_footer text_white">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                	<div class="footer_logo">
                    	<a href="index-2.html"><img alt="logo" src="{{ url('public/frontend/assets/images/logo_footer.png') }}"></a>
                    </div>
                    <p>If you have any query or suggestions you can contact us.</p>
                    <ul class="contact_info contact_info_light list_none">
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
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                	<h6 class="widget_title">USEFUL LINKS</h6>
                    <ul class="list_none widget_links">
                        <li><a href="{{ route('aboutus') }}">About Us</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Feedback</a></li>
                        <li><a href="#">Support center</a></li>
                        <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                	<h6 class="widget_title">RECENT POSTS</h6>
                    <ul class="recent_post border_bottom_dash list_none">
                    	<li>
                        	<div class="post_footer">
                            	<div class="post_img">
                                	<a href="#"><img src="{{ url('public/frontend/assets/images/letest_post1.jpg') }}" alt="letest_post1" /></a>
                                </div>
                                <div class="post_content">
                                	<h6><a href="#">This text is just for testing purpose.</a></h6>
                                    <p class="small m-0">Nov 09, 2019</p>
                                </div>
                            </div>
                        </li>
                        <li>
                        	<div class="post_footer">
                            	<div class="post_img">
                                	<a href="#"><img src="{{ url('public/frontend/assets/images/letest_post2.jpg') }}" alt="letest_post1" /></a>
                                </div>
                                <div class="post_content">
                                	<h6><a href="#">This text is just for testing purpose.</a></h6>
                                    <p class="small m-0">Nov 09, 2019</p>
                                </div>
                            </div>
                        </li>
                        <li>
                        	<div class="post_footer">
                            	<div class="post_img">
                                	<a href="#"><img src="{{ url('public/frontend/assets/images/letest_post3.jpg') }}" alt="letest_post1" /></a>
                                </div>
                                <div class="post_content">
                                	<h6><a href="#">This text is just for testing purpose.</a></h6>
                                    <p class="small m-0">Nov 09, 2019</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                    <h6 class="widget_title">Subscribe Newsletter</h6>
                    <p>Stay with us and enjoy all the new update about MOTOTIVE WEB SOLUTION.</p>
                    <div class="newsletter_form mb-4">
                        <form> 
                            <div class="outline_input">
                            	<input type="text" required placeholder="Enter Email Address"/>
                            </div>
                            <button type="submit" title="Subscribe" class="btn btn-submit" name="submit" value="Submit">
                            	<span class="ion-android-send"></span>
                            </button>
                        </form>
                    </div>
                    <h6 class="widget_title">Follow Us</h6>
                    <ul class="list_none footer_social">
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
    <div class="bottom_footer text_white border_top_tran">
    	<div class="container">
        	<div class="row align-items-center">
            	<div class="col-md-6">
                	<p class="copyright m-md-0 text-center text-md-left">&copy; {{ date('Y') }} All Rights Reserved by Mototive.</p>
                </div>
                <div class="col-md-6">
                	<ul class="list_none footer_link text-center text-md-right">
                    	<li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>