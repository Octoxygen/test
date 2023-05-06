<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function getPosts(Request $request) {
        $posts = DB::table('posts')->orderBy('created_at', 'desc')->get();
        $user = DB::table('users')->where('name', $request->session()->get('user'))->first();
        $featured = DB::table('posts')->where('post_id', 4)->first();

        $request->session()->put('posts', $posts);
        $request->session()->put('featured', $featured);

        return view('home');
    }
}
