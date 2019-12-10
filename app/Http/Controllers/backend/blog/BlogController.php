<?php

namespace App\Http\Controllers\backend\blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function __construct() {
        
    }
    public function index(){

        return view('backend.pages.blog');
    }
}
