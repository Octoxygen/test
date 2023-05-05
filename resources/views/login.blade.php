@extends('layout')
@section('title', 'Login - RMBLR')
@section('content')

<link href="/css/login.css" rel="stylesheet">

<div class="content prelogin">
    <div class="card">
        <div class="box-logo">
            <p class="logo">rmblrr.</p>
            {{-- <p>ramble on.</p> --}}
        </div>
        <hr>
        <form action= "{{ url('check') }}" method="post">
            {{ csrf_field() }}    
            <div class="box-input">
                <input class="short" type="text" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
            </div>
            <div class="box-input">
                <input class="short" type="password" name="password" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="box-buttons">
                <button class="cta" type="submit" value="Login" type="submit">Login</button>
                <button class="link" type="button" onclick="window.location='{{ url('/register') }}'">Sign Up</button>
            </div>
        </form>
    </div>
</div>

@endsection