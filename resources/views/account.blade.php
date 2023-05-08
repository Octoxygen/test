@extends('layout')
@section('title', 'Account - RMBLR')
@section('content')

<link rel="stylesheet" href="{{ asset('css/account.css')}}">

@extends('navbar')

<div class="content">
    <form action="{{ url('account/'.Session::get('user')) }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        {{-- @method('PATCH') --}}
        <div class="card large">
            <h2>Account Settings</h2>
            <div class ="box-settings">
                <div class= "content-acc-settings">
                    <p>Change Display Photo</p>
                    <p class="fine">This is how people see you in the site</p>
                </div>
                <input type="file" name="image">
            </div>
            {{-- <div class ="box-settings">
                <div class= "content-acc-settings">
                    <p>Change Username</p>
                    <p class="fine">This is your identity within the site</p>
                </div>
                    <input type="text" name="name" placeholder="ex. freshUsername" value="{{ Session::get('userdata')->name }}">
            </div> --}}
            <div class ="box-settings">
                <div class= "content-acc-settings">
                    <p>Change Password</p>
                    <p class="fine">This is how you get into the site</p>
                </div>
                <input type="password" name="password" placeholder="New Password" value="{{ Session::get('userdata')->password }}">
            </div>
            {{-- <div class ="container-acc-settings">
                <div class= "content-acc-settings">
                <h5>Change Email</h5>
                <h6>For when you forget your password</h6>
                </div>
                    <input type="email" type="email" placeholder="Input Email">
            </div> --}}
            <button type="submit"> Save Changes</button>
        </div>
    </form>
</div>

    @endsection