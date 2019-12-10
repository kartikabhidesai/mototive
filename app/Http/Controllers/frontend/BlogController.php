<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function __construct() {
       
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
    
    public function readmore(Request $request){
        
        print_r('hello');die();
    }
}
