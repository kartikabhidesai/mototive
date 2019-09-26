<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Route;
class HomeController extends Controller
{
    function __construct() {
       
    }
    public function dashboard(){
        
        $data['title'] = 'Mototive Websolution - Home';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array(); 
        return view('frontend.pages.dashboard',$data);
    }
    public function services(){
        
        $data['title'] = 'Mototive Websolution - Services';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array(); 
        return view('frontend.pages.services',$data);
    }
    public function portfolio(){
        
        $data['title'] = 'Mototive Websolution - Portfolio';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array(); 
        return view('frontend.pages.portfolio',$data);
    }
    public function aboutus(){
        
        $data['title'] = 'Mototive Websolution - About us';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array(); 
        return view('frontend.pages.aboutus',$data);
    }
    public function contactus(){
        
        $data['title'] = 'Mototive Websolution - Contact us';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array(); 
        return view('frontend.pages.contactus',$data);
    }
    public function blog(){
        
        $data['title'] = 'Mototive Websolution - Blog';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array(); 
        return view('frontend.pages.blog',$data);
    }
}
