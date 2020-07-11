<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Repositories\PostRepository;

class PostController extends Controller
{
    protected $posts;

    public function __construct(PostRepository $posts)
    {
        $this->middleware('auth');
        $this->posts = $posts;

    }

    public function index(Request $request)
    {
        $posts = Post::latest()
        ->simplePaginate(4);
        return view('post.index', [
            'posts' => $this->posts->forUser($request->user())
        ]);
    }


    public function create()
    {
        $post = new Post();
        return view('post.create', compact('post'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:posts|max:35',
            'post' => 'required|min:20'
        ]);

        $request->user()->posts()->create([
            'name' => $request->name,
            'post' => $request->post
        ]);

        return redirect()
            ->route('posts.index')
            ->with('success', 'Post created successfully');
    }


    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }


    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }


    public function update(Request $request, Post $post)
    {
        $data = $this->validate($request, [
            'name' => 'required|unique:posts,name,' . $post->id,
            'post' => 'required|min:100',
        ]);

        $post->fill($data);
        $post->save();
        return redirect()
            ->route('posts.index')
            ->with('success', 'Post created successfully');
    }


    public function destroy(Request $request, Post $post)
    {
        $this->authorize('destroy', $post);

        $post->delete();
        return redirect()
            ->route('posts.index')
            ->with('success', 'Post removed successfully');
    }

}
