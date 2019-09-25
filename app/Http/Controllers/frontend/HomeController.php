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
}
