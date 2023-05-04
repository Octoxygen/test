@extends('layout')
@section('title', 'Home - RMBLR')
@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@600&family=Inter:wght@700&family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
<link href="/css/main.css" rel="stylesheet">

@extends('navbar')

<div class="all">
    <div class="frame9 row">
        <div class="col-3">

            <div class="card-containerpost">
                <div class="row">
                    <img class="img6" src="avatarsignup.jpg">
                    <input class="frame6" type="text" placeholder="Write a post">
                </div>
            </div>
            <br>

            <div class="container-featured">
                <h1 >Featured
                <div class="pichome"></div></h1>
                <div class="text-featured"><h1>Ang Buhay Sa Pinas</h1>
                <div class="text-detailsmall"><h6>by Tirso Dejesus • May 23, 2023</h6></div>
                    <div class="text-featuredcontent"><a>Ang buhay sa pinas ay napaka hirap parang minsan pero madalas ay ayoko na. dahil kung and buhay ay kulang madalas naman ay kumpleto ngunit may pagkakataong ako’y nagtataka bakit ang gulay ay kadalasang kulay green. pero ang prutas sa likod ng bahay namin ay mabango pa sa ulam namin kanina ay tocino na may halong bangus at itlog na nilaga kahapon ng madaling arawuris.</a></div>
                        <div class="continuereading">
                            <button class="continuereading-button">Continue Reading</button>
                        </div>
                        </div>
            </div>
            <br>

            <div class="card-containerpost1">
                <h1>Posts</h1>
                <div class="blog-count1">
                    <div class="container-text">
                        <h5>Ayaw Ku NA</h5>
                        <div class="container-tag">
                            <button class="acct-tag" type="tag">Tags</button>
                            <button class="acct-tag" type="tag">Tags</button>
                            <button class="acct-tag" type="tag">Tags</button>
                        </div>
                        <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a dui tortor. Aenean semper efficitur nunc et vestibulum. Fusce pellentesque rhoncus </h6>
                    </div>
                </div>
                <div class="blog-count1">
                    <div class="container-text">
                        <h5>Bahay namin maliit lang</h5>
                        <div class="container-tag">
                            <button class="acct-tag" type="tag">Tags</button>
                            <button class="acct-tag" type="tag">Tags</button>
                            <button class="acct-tag" type="tag">Tags</button>
                        </div>
                        <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a dui tortor. Aenean semper efficitur nunc et vestibulum. Fusce pellentesque rhoncus </h6>
                    </div>
                </div>
                <div class="blog-count1">
                    <div class="container-text">
                        <h5>Big Black Chicken</h5>
                        <div class="container-tag">
                            <button class="acct-tag" type="tag">Tags</button>
                            <button class="acct-tag" type="tag">Tags</button>
                            <button class="acct-tag" type="tag">Tags</button>
                        </div>
                        <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a dui tortor. Aenean semper efficitur nunc et vestibulum. Fusce pellentesque rhoncus </h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="frame12">
            <div class="frame12-text"><a>Share and find blogs that pique your interests</a></div>
            <button class="frame12-button">Write Post</button>
            <button class="frame12-button1">Take Me Somewhere</button>
        </div>
    </div>
    
</div>
    @endsection