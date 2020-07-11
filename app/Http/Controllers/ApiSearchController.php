<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ApiSearchController extends Controller
{
    public function search(Request $request)
    {
        $posts = Post::where('name', 'like', '%' . $request->name . '%')->get();
        return view('post.search', compact('posts'));
    }



}
