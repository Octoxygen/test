@extends('layout')
@section('title', 'rmblr - Blog Title')
@section('content')

<link rel="stylesheet" href="{{ asset('css/content.css') }}">

@extends('navbar')
<div class="content">
    <div class="main">
        <div class="card blog large">
            <p class="title">{{ $post->title }}</p>
            <p class="details">by <b>{{ $post->user_name }}</b> • {{ $post->created_at }}</p>
            @if ($post->image)
                <img src="{{ asset('storage/image/posts/'.$post->image) }}">
            @endif
            <textarea class="text" readonly>{{ $post->text }}</textarea>
        </div>
    </div>

    <div class="side">
        <div class="card">
            test
        </div>
    </div>
</div>

<script type="text/javascript">
    document.querySelectorAll("textarea").forEach(element => {
      function autoResize(el) {
        el.style.height = el.scrollHeight + 'px';
      }
      autoResize(element);
      element.addEventListener('input', () => autoResize(element));
    });
  </script>
@endsection