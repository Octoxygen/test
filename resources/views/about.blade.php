@extends('layout')
@section('title', 'About - RMBLR')
@section('content')

<link rel="stylesheet" href="{{ asset('css/about.css') }}">

@extends('navbar')

<div class="content">
    <div class="card head">
        <p class="title"><a>&#60;devs&#62;</a> rmblrr <a>&#60;/devs&#62;</a></p>
    </div>

    <div class="box-devs">
        <div class="card dev">
            <img class="" src="tirso-dev.png">
            <p class="name">Tirso Jon III O. <b>De Jesus</b></p>
            <p class="role"><a>&#60; </a>Frontend Developer (Implementation)<a>&#62;</a></p>
            <p class="cont">Contact Us</p>
        </div>

        <div class="card dev">
            <img class="" src="choy-dev.png">
            <p class="name">Miguel Joshua M. <b>Fernandez</b></p>
            <p class="role"><a>&#60;</a>Frontend Developer (Implementation)<a>&#62;</a></p>
            <p class="cont">Contact Us</p>
        </div>

        <div class="card dev">
            <img class="" src="joven-dev.png">
            <p class="name">Jonathan Joven H. <b>Cruz</b></p>
            <p class="role"><a>&#60;</a>Frontend Developer (Implementation)<a>&#62;</a></p>
            <p class="cont">Contact Us</p>
        </div>

        <div class="card dev">
            <img class="" src="james-dev.png">
            <p class="name">James Patrick <b>de Vera</b></p>
            <p class="role"><a>&#60;</a>Frontend Developer (Design)<a>&#62;</a></p>
            <p class="cont">Contact Us</p>
        </div>

        <div class="card dev">
            <img class="" src="arice-dev.png">
            <p class="name">Arice Vincent M. <b>Belda</b></p>
            <p class="role"><a>&#60;</a>Backend Developer<a>&#62;</a></p>
            <p class="cont">Contact Us</p>
        </div>

        <div class="card dev">
            <img class="" src="anthony-dev.png">
            <p class="name">John Anthony DS. <b>Lopez</b></p>
            <p class="role"><a>&#60;</a>Backend Developer<a>&#62;</a></p>
            <p class="cont">Contact Us</p>
        </div>
    </div>
</div>
@endsection