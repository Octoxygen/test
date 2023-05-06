@extends('layout')
@section('title', 'rmblr - Blog Title')
@section('content')

<link rel="stylesheet" href="{{ asset('css/content.css') }}">

@extends('navbar')
<div class="content">
    <div class="main">
        <div class="card blog large">
            <p class="title">{{ $post->title }}</p>
            @if ($post->image)
                <img src="{{ asset('storage/image/posts/'.$post->image) }}">
            @endif
            <p class="details">by <b>{{ $post->user_name }}</b> • {{ $post->created_at }}</p>
            <p class="text">{{ $post->text }}</p>
        </div>
    </div>
</div>
@endsection