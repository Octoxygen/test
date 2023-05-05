<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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
// Route::get('/', [RegisterController::class, 'create']);
// Route::post('/register', [RegisterController::class, 'store'])->name('register');


Route::get('/login', [LoginController::class, 'index']);
Route::post('/check', [LoginController::class, 'check']);

// Route::resource("/login", LoginController::class);

Route::resource("/register", RegisterController::class);

Route::get('/', function () {
    return view('login');
});

// Route::get('/login', function(){
//     return view('login');
// });

Route::get('/registration', function(){
    return view('registration');
});

Route::get('/create', function(){
    return view('create');
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/account', function(){
    return view('account');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/content', function() {
    return view('content');
});