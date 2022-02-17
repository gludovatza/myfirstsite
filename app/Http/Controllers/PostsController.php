<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post)
    {
        // return "my post";

        // return $post;

        return view('post', compact('post'));
    }
}
