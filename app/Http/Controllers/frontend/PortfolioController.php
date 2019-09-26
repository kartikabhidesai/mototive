<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    function __construct() {
       
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
}
