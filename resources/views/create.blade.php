@extends('layout')
@section('title', 'Create - RMBLR')
@section('content')

@extends('navbar')

<div class="all">
    <div class ="container-main-create">
        <div class = "card-details">
            <input class="create-title" type="text" placeholder="Insert Title">
            <button class="upload-create" type="upload">Upload Image</button>
            <input class="create-post" type="text" placeholder="Write a post">
            <input class="create-tags" type="text" placeholder="Tags seperated by comma">
            <div class="container-buttons">
                <button class="btn-draft" type="button">Save to Drafts</button>
                <button class="btn-post" type="button">Post</button>
            </div>
        </div>
        <div class ="card-before">
            <h5>Before you post:</h5>
            <h6>*Arice</h6>
            <h6>*Choy</h6>
            <h6>*Joven</h6>
            <h6>*Tirso</h6>
            <h6>*Anthony</h6>
        </div>
    </div>
</div>

    @endsection