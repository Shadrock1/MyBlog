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

    <form action="{{url('/search')}}" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="name"
                   placeholder="Search"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
        </div>
    </form>
@endsection

@section('main')
    <div class="row ">
        <div class="blog-post">
            <div class="col-md-8 blog-main p-3">
                @foreach($posts as $post)
                    <h2 class="blog-post-title text-info">{{$post->name}}</h2>
                    <p class="blog-post-meta ">{{$post->created_at}}</p>
                    <p> {{$post->post}}</p>
                    <a href="{{route('posts.show', $post->id)}}" >Read</a>
                @endforeach
            </div>
        </div>

    </div>
@endsection
