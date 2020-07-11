@extends('layouts.app')

@section('header')
    <div class="container">
        <nav class="site-header  py-1">
            @if (Auth::guest())
            <div class="container d-flex  flex-md-row justify-content-end">
                <a class="py-2 mx-2 d-none d-md-inline-block" href="{{ url('/login') }}">Login</a>
                <a class="py-2 mx-2 d-none d-md-inline-block" href="{{ url('/register') }}">Registration</a>
            </div>
            @else
                <div class="container d-flex  flex-md-row justify-content-end">
                    <a class="py-2 mx-2 d-none d-md-inline-block" href="{{ route('home') }}">{{ Auth::user()->name }}</a>
                    <a class="py-2 mx-2 d-none d-md-inline-block" href="{{ route('logout') }}">Logout</a>
                </div>
            @endif
        </nav>
        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex ">
                <a class="p-2 text-muted" href="/">Home</a>
                <a class="p-2 text-muted" href="/posts">Posts</a>
            </nav>
        </div>
        <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">The most interesting news</h1>
                <p class="lead my-3">Fresh look at forget things</p>
            </div>
        </div>
    </div>
@endsection

@section('main')
    <div class="row mb-2">
        @foreach ($posts as $post)
        <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">Fresh news</strong>
                    <h3 class="mb-0">{{ $post->name ?? '' }}></h3>

                    <p class="card-text mb-auto">{{ Str::limit($post->post, 150) ?? '' }}</p>
                    <a href="{{ route('posts.show', $post->id) }}" class="stretched-link">Read</a>
                </div>
            </div>
        </div>
       @endforeach
    </div>
@endsection

@section('footer')
    <div class="row container pt-4 my-md-5 pt-md-5 border-top">
        <div class="col-6 col-md">
            <h5>Support</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Contact us</a></li>
            </ul>
        </div>
    </div>
@endsection
