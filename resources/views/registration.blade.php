@extends('layout')
@section('title', 'Register - RMBLR')
@section('content')

<link href="/css/main.css" rel="stylesheet">
<div class="all">
    <div class="row">
        <div class="imgregistration col">
            <img src="{{ asset("imgregistration.png") }}" alt="imgregistration">
        </div>
        <div class="cardregistration col">
            <form action="{{ url('register') }}" method="post" style="width: 750px; height: 450px">
                <div class="row" >
                    <div class="col center">
                        <div class="mb-3">
                            <div class="textlabel">
                                <div class="loginlabel">
                                {!! csrf_field() !!}
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
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                </div>
                                <div class="textlabelframe">
                                    <input type="email" name="email" class="form-control, loginlabelbackground" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input email">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="textlabel">
                                <div class="loginlabel">
                                    <label for="exampleInputEmail1" class="form-label">Password</label>
                                </div>
                                <div class="textlabelframe">
                                    <input type="password" value="Save" name="password" class="form-control, loginlabelbackground" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input password">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="textlabel">
                                <div class="loginlabel">
                                    <label for="exampleInputEmail1" class="form-label">ConfirmPassword</label>
                                </div>
                                <div class="textlabelframe">
                                    <input type="password" value="Save" name="password" class="form-control, loginlabelbackground" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Confirm Pasword">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        
                            <div class="center">
                                <img src="{{ asset('avatarsignup.jpg') }}" alt="avatarsignup" height="210px" width="210px" class="imgsignup">
                            </div>
                        
                        <div class="row" style="height: 470">
                            <div class="submit2 center">
                                <button class="submitsignup" type="button">Upload Image</button>
                                <button class="submit" type="button">Choose image</button>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="submit3">
                        <button class="submit3" type="submit">Sign Up</button>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection