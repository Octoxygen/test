@extends('layout')
@section('title', 'Create - RMBLR')
@section('content')

<link href="/css/main.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@600&family=Inter:wght@700&family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">RMBLR</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">POST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT</a>
                </li>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
        </div>
    </div>
</nav>
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