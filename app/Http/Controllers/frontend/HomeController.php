<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Route;
use App\model\Slider;
use App\model\Portfolio;
use App\model\Project_type;
use App\model\Testimonials;
use App\model\Logo;

class HomeController extends Controller {

    function __construct() {
        
    }

    public function dashboard() {

        $objSlider = new Slider();
        $data['slider'] = $objSlider->getSlider();
        $objPortfolio = new Portfolio();
        $data['details'] = $objPortfolio->getPortfoliodetails();
        $objProject_type = new Project_type();
        $data['type'] = $objProject_type->gettype();
        $objTestimonials = new Testimonials();
        $data['testimonials'] = $objTestimonials->gettestimonials();
        $objLogo = new Logo();
        $data['logo'] = $objLogo->getlogo();
        $data['title'] = 'Mototive Websolution - Home';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.dashboard', $data);
    }

}
