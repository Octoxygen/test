<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller
{
 
    public function index()
    {
        return view('registration');
    }
 
    public function store(Request $request): RedirectResponse
    {
       $input = $request->all();
 
       User::create([
        'name' => $input['name'],
        'email' => $input['email'],
        'password' =>($input['password'])
      ]);
       return redirect('login')->with('flash_message', 'user added');
    }
 
}