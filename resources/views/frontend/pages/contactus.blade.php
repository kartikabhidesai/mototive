@extends('frontend.layout.app')
@section('content')
<!-- START SECTION BANNER -->
<section class="background_bg breadcrumb_section overlay_bg2 page-title-light" data-img-src="{{ url('public/frontend/assets/images/contact-bg.jpg') }}">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12 text-center">
            	<div class="page-title">
            		<h1>Contact</h1>
                </div>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact 1</li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER -->

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
                        <address>123 Street, New South London , UK</address>
                    </li>
                    <li>
                        <span class="ti-email"></span>
                        <a href="mailto:info@sitename.com">info@sitename.com</a>
                    </li>
                    <li>
                        <span class="ti-mobile"></span>
                        <p>+ 457 789 789 65</p>
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
                            <div class="form-group col-lg-6">
                                <input required="required" placeholder="Enter Phone No. *" id="phone" class="form-control" name="phone" type="phone">
                            </div>
                            <div class="form-group col-lg-6">
                                <input placeholder="Enter Subject" id="subject" class="form-control" name="subject" type="subject">
                            </div>
                            <div class="form-group col-lg-12">
                                <textarea required="required" placeholder="Message *" id="description" class="form-control" name="message" rows="4"></textarea>
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