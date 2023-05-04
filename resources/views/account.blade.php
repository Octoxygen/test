@extends('layout')
@section('title', 'Account - RMBLR')
@section('content')

<link href="/css/main.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@600&family=Inter:wght@700&family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">

@extends('navbar')

<div class="all">
    <div class="container-account">
        <div class="card-account">
            <h1>Your Posts</h1>
            <div class="blog-count1">
                <div class="container-text">
                    <h5>Blog Title * March 10,1010</h5>
                    <div class="container-tag">
                    <button class="acct-tag" type="tag">Tags</button>
                    <button class="acct-tag" type="tag">Tags</button>
                    <button class="acct-tag" type="tag">Tags</button>
                    </div>

                </div>
                <div class="container-acc-button">
                    <button class="acct-tag1" type="tag">View</button>
                    <button class="acct-tag1" type="tag">Edit</button>
                    <button class="acct-tag1" type="tag">Delete</button>
                </div>
            </div>
            <div class="blog-count1">
                <div class="container-text">
                    <h5>Blog Title * March 10,1010</h5>
                    <div class="container-tag">
                    <button class="acct-tag" type="tag">Tags</button>
                    <button class="acct-tag" type="tag">Tags</button>
                    <button class="acct-tag" type="tag">Tags</button>
                    </div>

                </div>
                <div class="container-acc-button">
                    <button class="acct-tag1" type="tag">View</button>
                    <button class="acct-tag1" type="tag">Edit</button>
                    <button class="acct-tag1" type="tag">Delete</button>
                </div>
            </div>
            <div class="blog-count1">
                <div class="container-text">
                    <h5>Blog Title * March 10,1010</h5>
                    <div class="container-tag">
                    <button class="acct-tag" type="tag">Tags</button>
                    <button class="acct-tag" type="tag">Tags</button>
                    <button class="acct-tag" type="tag">Tags</button>
                    </div>

                </div>
                <div class="container-acc-button">
                    <button class="acct-tag1" type="tag">View</button>
                    <button class="acct-tag1" type="tag">Edit</button>
                    <button class="acct-tag1" type="tag">Delete</button>
                </div>
            </div>
            <div class="blog-count1">
                <div class="container-text">
                    <h5>Blog Title * March 10,1010</h5>
                    <div class="container-tag">
                    <button class="acct-tag" type="tag">Tags</button>
                    <button class="acct-tag" type="tag">Tags</button>
                    <button class="acct-tag" type="tag">Tags</button>
                    </div>

                </div>
                <div class="container-acc-button">
                    <button class="acct-tag1" type="tag">View</button>
                    <button class="acct-tag1" type="tag">Edit</button>
                    <button class="acct-tag1" type="tag">Delete</button>
                </div>
            </div>
            <div class="blog-count1">
                <div class="container-text">
                    <h5>Blog Title * March 10,1010</h5>
                    <div class="container-tag">
                    <button class="acct-tag" type="tag">Tags</button>
                    <button class="acct-tag" type="tag">Tags</button>
                    <button class="acct-tag" type="tag">Tags</button>
                    </div>

                </div>
                <div class="container-acc-button">
                    <button class="acct-tag1" type="tag">View</button>
                    <button class="acct-tag1" type="tag">Edit</button>
                    <button class="acct-tag1" type="tag">Delete</button>
                </div>
            </div>
            <div class="blog-count1">
                <div class="container-text">
                    <h5>Blog Title * March 10,1010</h5>
                    <div class="container-tag">
                    <button class="acct-tag" type="tag">Tags</button>
                    <button class="acct-tag" type="tag">Tags</button>
                    <button class="acct-tag" type="tag">Tags</button>
                    </div>

                </div>
                <div class="container-acc-button">
                    <button class="acct-tag1" type="tag">View</button>
                    <button class="acct-tag1" type="tag">Edit</button>
                    <button class="acct-tag1" type="tag">Delete</button>
                </div>
            </div>
        </div>
        <div class ="card-settings">
            <h2>Account Settings</h2>
            <div class ="container-acc-settings">
                <div class= "content-acc-settings">
                <h5>Change Display Photo</h5>
                <h6>This is how people see you in the site</h6>
                </div>
                    <button class="acc-upload" type="Upload">Upload Image</button>
            </div>
            <div class ="container-acc-settings">
                <div class= "content-acc-settings">
                <h5>Change Username</h5>
                <h6>This is your identity within the site</h6>
                </div>
                    <input type="text" type="username" placeholder="Username">
            </div>
            <div class ="container-acc-settings">
                <div class= "content-acc-settings">
                <h5>Change Password</h5>
                <h6>This is how you get into the site</h6>
                </div>
                <input type="text" type="password" placeholder="**">
            </div>
            <div class ="container-acc-settings">
                <div class= "content-acc-settings">
                <h5>Change Email</h5>
                <h6>For when you forget your password</h6>
                </div>
                 <input type="email" type="email" placeholder="Input Email">
            </div>
        </div>
    </div>
</div>

    @endsection