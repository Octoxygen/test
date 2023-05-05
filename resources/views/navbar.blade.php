<link href="/css/nav.css" rel="stylesheet">

<?php
    $isLogoutVisible = true;
?>

@if (empty(Session::get('user')))
    <script type="text/javascript">
        window.location = "{{ url('/login') }}";
    </script>
@endif

<div class="navx">
    <div class="container-left">
        <p class="logo" onclick="window.location='{{ url('home') }}'">rmblrr</p>
        <button class="button {{ str_contains(request()->url(), '/home')? 'active': '' }}" onclick="window.location='{{ url('home') }}'">POSTS</button>
        <button class="button {{ str_contains(request()->url(), '/about')? 'active': '' }}" onclick="window.location='{{ url('about') }}'">ABOUT</button>
    </div>

    <div class="container-right">
        <img src="svg/icon-user.svg">
        <div class="container-user">
            <p class="username" onclick="window.location='{{ url('account') }}'">{{ Session::get('user') ?? 'adfdadfafadaaaaaaaaaaaaaaafaf' }}</p>
            <p class="postcount" onclick="window.location='{{ url('account') }}'">{{ $posts ?? 'no posts yet' }}</p>
        </div>
        <div class="btn-menudown" onclick="toggleVisibility()">
            <img class="icon-menudown" src="svg/menu-down.svg" alt="">
        </div>
    </div>

    <div class="control hidden" id="control">
        <form action="{{ url('logout') }}" method="post">
            {{ csrf_field() }}
            <button type="submit">Logout</button>
        </form>
    </div>
</div>

<script type="text/javascript">
    var isLogoutVisible = false;
    function toggleVisibility() {
        var control = document.getElementById("control");
        console.log(isLogoutVisible);
        isLogoutVisible? control.classList.add('hidden') : control.classList.remove('hidden');
        isLogoutVisible = !isLogoutVisible;
    }
</script>