<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Client\Request;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [LoginController::class, 'index']);
Route::post('/check', [LoginController::class, 'check']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::resource("/register", RegisterController::class);
Route::post("/account/{name}", [RegisterController::class, 'update']);

Route::get('/', function () {
    return view('login');
});

Route::get('/registration', function(){
    return view('registration');
});

Route::resource('/post', PostController::class);
Route::get('/random', [PostController::class, 'random']);
Route::get('/user/posts', [PostController::class, 'posts']);

Route::get('/home', [HomeController::class, 'getPosts']);

Route::get('/account', function(){
    return view('account');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/content/{id?}', function() {
    return view('content');
});

Route::get('/content', function() {
    return view('content');
});