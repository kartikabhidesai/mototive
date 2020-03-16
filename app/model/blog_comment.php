<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class blog_comment extends Model {

    protected $table = 'blog_comment';

    public function addblogcomment($request, $id) {
        $objBlog = new blog_comment();
        $objBlog->blg_id = $request->input('blogid');
        $objBlog->blg_cmt_name = $request->input('blg_cmt_name');
        $objBlog->blg_cmt_email = $request->input('blg_cmt_email');
        $objBlog->blg_cmt = $request->input('blg_cmt');
        $objBlog->created_at = date("Y-m-d h:i:s");
        $objBlog->updated_at = date("Y-m-d h:i:s");
        return $objBlog->save();
    }

    public function viewblogcomment($id){
         $query = blog_comment::select('blog_comment.id', 'blog_comment.blg_cmt_name', 'blog_comment.blg_cmt', 'blog_comment.created_at', 'blog_comment.updated_at')
                ->where('blog_comment.blg_id', $id)
                ->get();
        return $query;
    }
}
