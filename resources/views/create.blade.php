@extends('layout')
@section('title', 'Create - RMBLR')
@section('content')

<link href="{{ asset('/css/create.css') }}" rel="stylesheet">

@extends('navbar')
<div class="content">
    <div class="main">
        <form action="create" method="post" enctype='multipart/form-data'>
            {{ csrf_field() }}
            <div class = "card details large">
                <div class="box-input txtarea">
                    <textarea class="title" name="title" placeholder="Insert Title"></textarea>
                </div>
                <input type="file" name="image">
                <button class="" type="upload">Upload Image</button>
                <div class="box-input txtarea">
                    <textarea class="text" name="text" type="textarea" placeholder="Write a post"></textarea>
                </div>
                <div class="box-input">
                    <input class="" type="text" placeholder="Tags seperated by comma">
                </div>
                <div class="buttons">
                    <button class="" type="button">Save to Drafts</button>
                    <button class="" type="submit">Post</button>
                </div>
            </div>
        </form>
    </div>

    <div class="side">
        <div class ="card">
            <p class="em sm">Before you post:</p>
            <p class="nm sm">To maintain a healthy and safe space for all our users, please take the time to read the following guidelines, especially if it is your first time posting.</p>
            <p class="nm sm tagline">ramble on.</p>
            <p class="nm sm guidelines">
                1. User Safety: Users should feel safe when using the app. To ensure user safety, the following rules and guidelines should be in place.
                No hate speech or discriminatory language against any individual or group of people.
                • No threats of violence or harm to anyone.
                No sharing of personal information of any user without their explicit consent.
                • No cyberbullying or harassment of any user.
                • No promotion of illegal activities.
                2. Privacy: Users should have control over their data and privacy. To ensure privacy, the
                following rules and guidelines should be in place:
                •No sharing of any user's personal information without their consent.
                No unauthorized access or use of any user's account or data.
                All user data should be stored securely and handled according to privacy laws and
                regulations.
                3. Community Standards: The app should foster a healthy community where users can
                engage with each other in a respectful manner. To ensure community standards, the
                following rules and guidelines should be in place:
                • No spamming or excessive self-promotion.
                • No posting of inappropriate or offensive content.
                • No sharing of copyrighted material without permission.
                Users should be respectful towards each other and refrain from using vulgar language or
                engaging in arguments.
                4. Moderation: The app should have a team in place to moderate user activity and enforce
                the rules and guidelines. The following guidelines should be in place.
                Users who violate the rules and guidelines will face consequences such as account
                suspension or permanent banning.
                • The moderation team should be impartial and unbiased in their decisions.
                Users should have the ability to report any violations of the rules and guidelines.
            </p>
            <button>Show Guidelines</button>
        </div>
    </div>
</div>

    @endsection