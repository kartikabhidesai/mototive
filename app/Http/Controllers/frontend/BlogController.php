<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Blog;
use App\model\Blog_category;
use App\model\blog_comment;

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

        if ($request->isMethod('post')) {
            $id = $request->input('blogid');
            $objBlog = new blog_comment();
            $result = $objBlog->addblogcomment($request, $id);
            if ($result) {
                $return['status'] = 'success';
                $return['message'] = 'Thanks For comment';
                $return['redirect'] = route('blogreadmore',$id);
            } else {
                $return['status'] = 'error';
                $return['message'] = 'Something Wrong.';
            }
            return json_encode($return);
            exit;
        }
        $objBlogcmt = new blog_comment();
        $data['blog_cmt'] = $objBlogcmt->viewblogcomment($id);
        
        $objBlog = new Blog();
        $data['blog'] = $objBlog->viewreadmoreblog($id);

        $obj_Blog_category = new Blog_category();
        $data['obj_Blog_category'] = $obj_Blog_category->viewblogcategory();

        $data['title'] = 'Mototive Websolution - Blog';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'readmoreblog.js');
        $data['funinit'] = array('Readmoreblog.init()');
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
