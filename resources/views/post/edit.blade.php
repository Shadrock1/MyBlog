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
    {{ Form::model($post, ['url' => route('posts.update', $post), 'method' => 'PATCH']) }}

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{ Form::label('name', 'Название') }}<br>
    {{ Form::text('name') }}<br>
    {{ Form::label('post', 'Содержание') }}<br>
    {{ Form::textarea('post') }}<br>

    {{ Form::submit('Save') }}
    {{ Form::close() }}
@endsection
