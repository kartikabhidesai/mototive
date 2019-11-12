<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Route;
use App\model\Slider;

class HomeController extends Controller
{
    function __construct() {
       
    }
    public function dashboard(){
        
        $objSlider = new Slider();
        $data['slider'] = $objSlider->getSlider();
        $data['title'] = 'Mototive Websolution - Home';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array(); 
        return view('frontend.pages.dashboard',$data);
    }
}
