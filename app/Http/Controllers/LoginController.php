<?php
 
namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
 
    public function index(): View {
        return view('login');
    }

    public function show(Request $request): View {
        if ($request->name == "ares") {
            return view('registration');
        } else {
            return view('login');
        }
    }
 
    public function check(Request $request) {
        $checkname = DB::scalar(
            "SELECT COUNT(id) FROM users WHERE `name` = \"$request->name\" AND `password` = \"$request->password\""
        );

        $request->session()->put('user', $request->name);

        if ($checkname == 1) {
            return redirect('home');
        } else {
            return redirect('login')->with('error', true);
        }
    }

    // public function check(Request $request) {
    //     $credentials = $request->validate([
    //     'email' => ['required', 'email'],
    //     'password' => ['required'],
    //     ]);
        
    //     if (Auth::attempt($credentials))
    //     {
    //         return view('login.home');
    //     }
    //     return "<h2>Username or Password Invalid!</h2>";  
    // }
 
}