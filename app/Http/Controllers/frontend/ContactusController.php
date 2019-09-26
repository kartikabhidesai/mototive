<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    function __construct() {
       
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
}
