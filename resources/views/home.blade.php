@extends('layouts.app')

@section('header')
    <div class="container">
        <nav class="site-header  py-1">
            <div class="container d-flex flex-md-row justify-content-end ">
                <a class="py-2" href="#" aria-label="Product">
                </a>
                <a class="py-2 mx-2 d-none d-md-inline-block"  href="/">Home</a>
                <div class="container d-flex  flex-md-row justify-content-end">
                    <a class="py-2 mx-2 d-none d-md-inline-block" href="{{ route('home') }}">{{ Auth::user()->name }}</a>
                    <a class="py-2 mx-2 d-none d-md-inline-block" href="{{ route('logout') }}">Logout</a>
                </div>
            </div>
        </nav>
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
