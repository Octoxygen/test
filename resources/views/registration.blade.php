@extends('layout')
@section('title', 'Register - RMBLR')
@section('content')

<link href="{{ asset('/css/registration.css') }}" rel="stylesheet">

<div class="content prelogin">
    {{-- <div class="">
        <img src="{{ asset("imgregistration.png") }}" alt="imgregistration">
    </div> --}}

    <div class="card">
        <div class="box-logo">
            <p>rmblrr</p>

        </div>

        <form action="{{ url('register') }}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="box-details">
                <div class="text">
                    <div class="field">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <div class="box-input">
                            <input class="short" type="text" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ex. ramblermaster">
                        </div>
                    </div>
                    <div class="field">
                        <label for="exampleInputEmail1" class="">Email</label>
                        <div class="box-input">
                            <input class="short" type="text" name="email" class="" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ex. sherlock@rmblrr.com">
                        </div>
                    </div>
                    <div class="field">
                        <label for="exampleInputEmail1" class="">Password</label>
                        <div class="box-input">
                            <input class="short" type="password" name="password" class="" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ex. @superSeCrEt123">
                        </div>
                    </div>
                    <div class="field">
                        <label for="exampleInputEmail1" class="">Confirm Password</label>
                        <div class="box-input">
                            <input class="short" type="password" name="password" class="" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Retype your password">
                        </div>
                    </div>
                </div>
    
                <div class="">
                    <img src="{{ asset('avatarsignup.jpg') }}" alt="avatarsignup" height="210px" width="210px" class="">
                
                    <div class="" style="height: 470">
                        <input type="file" name="image">
                    </div>
                    
                </div>
            </div>
            <hr>
            <button class="" type="submit">Sign Up</button>
        </form>
    </div>
</div>
@endsection