<?php

namespace App\Http\Controllers;

use App\Post;


class WelcomeController extends Controller
{

    public function index()
    {
        $posts = Post::take(2)->get();
        return view('welcome', compact('posts'));
    }

}
