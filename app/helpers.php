<?php

use App\Models\Blog;



if (!function_exists('get_blogs_by_limit')) {
    function get_blogs_by_limit($limit, $except_id = null)
    {
        if (!is_null($except_id)) {
            $blogs = Blog::orderBy('created_at', 'desc')->where('id', '!=', $except_id)->take($limit)->get();
        } else {
            $blogs = Blog::orderBy('created_at', 'desc')->limit($limit)->get();
        }
        return $blogs;
    }
}
