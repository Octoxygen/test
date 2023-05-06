@extends('layout')
@section('title', 'Home - RMBLR')
@section('content')

<?php
    $id = Session::get('user_id');
    $featured = Session::get('featured');
?>

<link rel="stylesheet" href="css/home.css">

<script type="text/javascript">
    console.log("{{ Session::get('user_id') }}");
    console.log('test');
</script>

@extends('navbar')
<div class="content">
    <div class="main">
        <div class="card post">
                <img class="user-icon" src="{{ Session::get('userdata')->image ? asset('/storage/image/users/'.Session::get('userdata')->image) : asset('svg/icon-user.svg') }}">
                <input type="text" placeholder="Write a post" onclick="window.location='{{ url('create') }}'">
        </div>

        <div class="card large">
            <h1>Featured</h1>
            <hr>
            <div class="featured">
                @if ($featured->image)
                    <img src="{{ asset('/storage/image/posts/'.$featured->image) }}">
                @endif
                <div class="text">
                    <p class="title">{{ $featured->title }}</p>
                    <p class="details">by <b>{{ $featured->user_name }}</b> • {{ $featured->created_at }}</p>
                    <p class="preview">{{ $featured->text }}</p>
                    <form action="{{ url('/content'.'/'.$featured->post_id) }}" method="get">
                        <button type="submit">Continue Reading</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="card large">
            <h1>Posts</h1>
            <hr>
            @foreach (Session::get('posts') as $post)
                <div class="blog">
                    <div class="box-header">
                        <div class="box-info">
                            <p class="title">{{ $post->title }}</p>
                            <p class="details">by <b>{{ $post->user_name }}</b> • {{ $post->created_at}}</p>
                            <div class="box-tags">
                                <button class="tag" type="button">Tags</button>
                                <button class="tag" type="button">Tags</button>
                                <button class="tag" type="button">Tags</button>
                            </div>
                        </div>
                        
                        @if ($post->image)
                            <img class="image" src="{{ asset('/storage/image/posts/'.$post->image) }}" alt="">
                        @endif
                    </div>
                    <p class="preview">{{ $post->text }}</p>
                </div>
            @endforeach
            <hr>
        </div>
    </div>

    <div class="side">
        <div class="card call_to_action">
            <p><b class="em sm">Welcome to rmblr!</b></p>
            <p class="nm sm">Share and find blogs that pique your interests</p>
            <button class="cta" onclick="window.location='{{ url('create') }}'">Write Post</button>
            <button onclick="window.location='{{ url('content') }}'">Take Me Somewhere</button>
        </div>
    </div>
</div>
@endsection