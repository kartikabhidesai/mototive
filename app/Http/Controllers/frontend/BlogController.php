<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Blog;

class BlogController extends Controller {

    function __construct() {
        
    }

    public function blog() {

        $objBlog = new Blog();
        $data['blog'] = $objBlog->viewDetails();
        $data['title'] = 'Mototive Websolution - Blog';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.blog', $data);
    }

    public function readmore(Request $request, $id) {

        $objBlog = new Blog();
        $data['blog'] = $objBlog->viewreadmoreblog($id);
        $data['title'] = 'Mototive Websolution - Blog';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.read_more_blog', $data);
    }

    public function blog_footer(Request $request) {

        $objBlog = new Blog();
        $blog['blogfooter'] = $objBlog->viewDetailsFooter();
        $footerfile = view('frontend.pages.blogfooter', $blog);
        echo $footerfile;
        exit;
    }

}
