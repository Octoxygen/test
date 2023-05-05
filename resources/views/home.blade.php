@extends('layout')
@section('title', 'Home - RMBLR')
@section('content')

<link rel="stylesheet" href="css/home.css">

@extends('navbar')
<div class="content">
    <div class="main">
        <div class="card post">
                <img class="user-icon" src="{{ asset('svg/icon-user.svg') }}">
                <input type="text" placeholder="Write a post" onclick="window.location='{{ url('create') }}'">
        </div>

        <div class="card large">
            <h1>Featured</h1>
            <hr>
            <div class="featured">
                <img class="user-icon" src="{{ asset('tirso-dev.png') }}">
                <div class="text">
                    <p class="title">Ang Buhay Sa Pinas</p>
                    <p class="details">by <b>Tirso Dejesus</b> • May 23, 2023</p>
                    <p class="preview">
                        Ang buhay sa pinas ay napaka hirap parang minsan pero madalas ay ayoko na. dahil kung and buhay ay kulang madalas naman ay kumpleto ngunit may pagkakataong ako’y nagtataka bakit ang gulay ay kadalasang kulay green. pero ang prutas sa likod ng bahay namin ay mabango pa sa ulam namin kanina ay tocino na may halong bangus at itlog na nilaga kahapon ng madaling arawuris. bakit ang gulay ay kadalasang kulay green. pero ang prutas sa likod ng bahay namin ay mabango pa sa ulam namin kanina ay tocino na may halong bangus at itlog na nilaga kahapon ng madaling arawuris.bakit ang gulay ay kadalasang kulay green. pero ang prutas sa likod ng bahay namin ay mabango pa sa ulam namin kanina ay tocino na may halong bangus at itlog na nilaga kahapon ng madaling arawuris.
                    </p>
                    <button onclick="window.location='{{ url('content') }}'">Continue Reading</button>
                </div>
            </div>
        </div>

        <div class="card large">
            <h1>Posts</h1>
            <hr>
            {{-- to be iterated --}}
            <div class="blog">
                <div class="box-header">
                    <div class="box-info">
                        <p class="title">Ayaw Ku NA</p>
                        <p class="details">by <b>Tirso Dejesus</b> • May 23, 2023</p>
                        {{-- to be iterated --}}
                        <div class="box-tags">
                            <button class="tag" type="button">Tags</button>
                            <button class="tag" type="button">Tags</button>
                            <button class="tag" type="button">Tags</button>
                        </div>
                    </div>
                    <img class="image" src="" alt="">
                </div>
                <p class="preview">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a dui tortor. Aenean semper efficitur nunc et vestibulum. Fusce pellentesque rhoncus </p>
            </div>
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