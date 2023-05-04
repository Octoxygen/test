@extends('layout')
@section('title', 'Login - RMBLR')
@section('content')


<link href="/css/main.css" rel="stylesheet">
<div class="all">
    <div class="container, mb-3">
        <div class="frame2 row">
            <img class="ramblerlogo" src="{{ asset("rambler.png") }}" alt="rambler" width="290" height="279">
        </div>
        <div class="frame3 row">
        <div class="centerbottom">
            <div class="container">
                <form action= "{{ url('check') }}" method="post">
                    {{ csrf_field() }}    
                    <div class="mb-3">
                            <div class="textlabel">
                                <div class="loginlabel">
                                    <label for="exampleInputEmail1" class="form-label">Username</label>
                                </div>
                                <div class="textlabelframe">
                                    <input type="username" name="name" class="form-control, loginlabelbackground" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input username">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="textlabel">
                                <div class="loginlabel">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                </div>
                                <div class="textlabelframe">
                                    <input type="password" name="password" class="form-control, loginlabelbackground" id="exampleInputPassword1" placeholder="Input password">
                                </div>
                            </div>
                        </div>
                        <div class=submit1>
                            <button type="submit" class="btn btn-success" value="Login" type="submit">Login</button>
                            <button class="submitsignup" type="button" onclick="window.location='{{ url('/register') }}'">Sign Up</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</div>
</div>
</form>
</div>
</div>

@endsection