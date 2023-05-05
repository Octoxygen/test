@extends('layout')
@section('title', 'About - RMBLR')
@section('content')

@extends('navbar')

<div class="all">
    <div class="container-main-about">
        <div class="text-about">
            <h2>About the Developers</h2>
        </div>
        <div class="container-about">
            <div class="card-dev">
                <img class="picture-dev" src="tirso-dev.png">
                <p>Tirso Jon III O. De Jesus</p>
                <p>Front End Developer (Implementation)</p>
                <p>Contact Us</p>
            </div>
            <div class="card-dev">
                <img class="picture-dev" src="choy-dev.png">
                <p>Migue Joshua M. Fernandez</p>
                <p>Front End Developer (Implementation)</p>
                <p>Contact Us</p>
            </div>
            <div class="card-dev">
                <img class="picture-dev" src="joven-dev.png">
                <p>Jonathan Joven H. Cruz</p>
                <p>Front End Developer (Prototyping)</p>
                <p>Contact Us</p>
            </div>
        </div>
        <div class="container-about">
            <div class="card-dev">
                <img class="picture-dev" src="james-dev.png">
                <p>James Patrick Pampam DeVera</p>
                <p>Front End Developer (Prototyping)</p>
                <p>Contact Us</p>
            </div>
            <div class="card-dev">
                <img class="picture-dev" src="arice-dev.png">
                <p>Arice Vincent M. Belda</p>
                <p>Back End Developer</p>
                <p>Contact Us</p>
            </div>
            <div class="card-dev">
                <img class="picture-dev" src="anthony-dev.png">
                <p>John Anthony DS. Lopez</p>
                <p>Back End Developer</p>
                <p>Contact Us</p>
            </div>
        </div>
    </div>  
</div>
@endsection