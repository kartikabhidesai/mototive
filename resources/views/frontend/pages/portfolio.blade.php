@extends('frontend.layout.app')
@section('content')
<!-- START SECTION BANNER -->
<section class="background_bg breadcrumb_section overlay_bg2 page-title-light" data-img-src="{{ url('public/frontend/assets/images/portfolio_signle_bg1.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="page-title">
                    <h1>Portfolio</h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ asset('/') }}">Home</a></li>
                        <li class="breadcrumb-item">Portfolio</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
       <div class="row mb-3 mb-sm-5">
            <div class="col-md-12 text-center">
                <ul class="list_none portfolio_filter filter_tab1">
                    <li><a href="#" class="current" data-filter="*">all</a></li>
                    @for($j = 0; $j < count($projecttype); $j++)
                    <li><a href="#" data-filter=".{{ $projecttype[$j]->type }}">{{ $projecttype[$j]->type }}</a></li>
                    @endfor
                    
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="portfolio_container gutter_small work_col3 portfolio_gallery portfolio_style2">
                	<li class="grid-sizer"></li>
                    <!-- START PORTFOLIO ITEM -->
                    @for($i = 0; $i < count($details); $i++)
                    <li class="portfolio-item {{ $details[$i]->type }}">
                        <div class="portfolio_item">
                            <a href="#" class="image_link">
                                <img src="{{ url('public/uploads/portfolio/',$details[$i]->image) }}" alt="image">
                            </a>
                                <div class="portfolio_content">
                                    <div class="link_container">
                                        <a href="{{ url('public/uploads/portfolio/',$details[$i]->image) }}" class="image_popup"><i class="ion-image"></i></a>
                                        <a href="{{ route('portfolioreadmore', $details[$i]->id) }}"><i class="ion-plus"></i></a>
                                    </div>
                                    <h5><a href="#">{{ $details[$i]->name }}</a></h5>
                                    <p>{{ $details[$i]->short_description }}</p>
                              </div>
                        </div>
                    </li>
                    @endfor
                    <!-- END PORTFOLIO ITEM -->
                   
                    
                   
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="cta_section_small overlay_bg3 px-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 text_white animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 1;">
                <h2 class="">LIKE OUR WORK?</h2>
                <!--<p class="mb-md-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim.</p>-->
            </div>
            <div class="col-md-4 text-md-right animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.6s" style="animation-delay: 0.6s; opacity: 1;">	
                <a href="{{ route('contactus') }}" class="btn btn-outline-white">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<!-- END SECTION BANNER --> 
<!-- START SECTION PORTFOLIO -->

@endsection