@extends('layout')
@section('title', 'Posts - RMBLR')
@section('content')

<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="stylesheet" href="{{ asset('css/posts.css') }}">

@extends('navbar')

<div class="content">
    <div class="card large">
        <h1>Your Posts</h1>
        <hr>
        @foreach (Session::get('posts') as $post)
        @if ($post->user_name == Session::get('user'))
        <div class="blog">
            <div class="box-header">
                <div class="box-info">
                    <p class="title">{{ $post->title }}</p>
                    <p class="details">by <b>{{ $post->user_name }}</b> • {{ $post->created_at}}</p>
                    <div class="box-tags">
                        @foreach (explode(',', $post->tags) as $tag)
                        <button class="tag" type="button">{{ $tag }}</button>
                        @endforeach
                    </div>
                </div>
                
                @if ($post->image)
                    <img class="image" src="{{ asset('storage/image/posts/'.$post->image) }}" alt="">
                @endif

                <div class="buttons">
                    <button class="acct-tag1" type="tag" onclick="window.location='{{ url('/post/'.$post->post_id) }}'">View</button>
                    {{-- <button class="acct-tag1" type="tag">Edit</button> --}}

                    <form action="{{ url('/post/'.$post->post_id) }}" method="post">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button class="acct-tag1" type="tag" onclick="return confirm(&quot; Confirm delete? Upon clicking YES, you will be redirected back to the home page.&quot;)">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        @endif
        @endforeach
    </div>
</div>

@endsection