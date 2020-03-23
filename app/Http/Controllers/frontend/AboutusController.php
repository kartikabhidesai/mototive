<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Testimonials;

class AboutusController extends Controller
{
    function __construct() {
       
    }
    public function aboutus(){
        
        $objTestimonials = new Testimonials();
        $data['testimonials'] = $objTestimonials->gettestimonials();
        $data['title'] = 'Mototive Websolution - About us';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array(); 
        return view('frontend.pages.aboutus',$data);
    }
}
