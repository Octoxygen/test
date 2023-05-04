<link href="/css/main.css" rel="stylesheet">
<link href="/css/nav.css" rel="stylesheet">

{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">RMBLR</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home">POST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about">ABOUT</a>
                </li>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="button">Search</button>
                </form>
        </div>
    </div>
</nav> --}}

<div class="navx">
    <div class="container-left">
        <p class="logo" onclick="window.location='{{ url('account') }}'">rmblr</p>
        <button class="button active" onclick="window.location='{{ url('home') }}'">POSTS</button>
        <button class="button" onclick="window.location='{{ url('about') }}'">ABOUT</button>
    </div>
    <div class="container-right">
        <img src="svg/icon-user.svg">
        <div class="container-user">
            <p class="username" onclick="window.location='{{ url('account') }}'">{{ $username ?? 'adfdadfafadaaaaaaaaaaaaaaafaf' }}</p>
            <p class="postcount" onclick="window.location='{{ url('account') }}'">{{ $posts ?? 'no posts yet' }}</p>
        </div>
        <img class="btn-menudown" src="svg/menu-down.svg" alt="" onclick="window.location='{{ url('account') }}'">
    </div>
</div>