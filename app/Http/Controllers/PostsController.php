<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function show($slug)
    {
        // return "my post";

        // return $post;

        $post = \DB::table('posts')->where('slug', $slug)->first();
        // dd($post);
        return view('post', compact('post'));
    }
}
