@extends('layouts.app')

@section('header')
    <div class="container">
        <nav class="site-header  py-1">
            <div class="container d-flex flex-md-row justify-content-end ">
                <a class="py-2" href="#" aria-label="Product">
                </a>
                <a class="py-2 mx-2 d-none d-md-inline-block"  href="/">Home</a>
                <a class="py-2 mx-2 d-none d-md-inline-block" href="/search">Search</a>
                <a class="py-2 mx-2 d-none d-md-inline-block" href="{{route('posts.create')}}">New post</a>
            </div>
        </nav>
    </div>
@endsection

@section('main')
    <div class="container  d-flex row justify-content-center">
        <h1 >{{$post->name}}</h1>
        <p>{{$post->post}}</p>
        <p class="blog-post-meta ">{{$post->created_at}}</p>
    </div>
    <p class="py-2 mx-2 d-none d-md-inline-block">
        <a href="{{route('posts.edit', $post->id)}}" type="button">Edit</a>
        <a href="{{route('posts.destroy', $post->id)}}" data-confirm="Are you sure?" data-method="delete" rel="nofollow"  type="button">Delete</a>
    </p>
@endsection
