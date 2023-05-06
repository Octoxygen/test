<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class RegisterController extends Controller
{
 
    public function index() {
        return view('registration');
    }
 
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
 
        if ($request->hasFile('image')) {
            $destination_path = 'public/image/users';
            $image = $request->file('image');
            $image_name = $request->name;
            $path = $request->file('image')->storeAs($destination_path, $image_name);

            $input['image'] = $image_name;
        }

        User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' =>($input['password']),
            'image' => $input['image'],
        ]);
       return redirect('login')->with('flash_message', 'user added');
    }
 
}