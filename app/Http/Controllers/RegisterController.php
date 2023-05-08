<?php
namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
            'image' => $request->hasFile('image')? $input['image'] : null,
        ]);
       return redirect('login')->with('flash_message', 'user added');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $name) {
        $user = User::find($name);
        $input = $request->all();

        if ($request->hasFile('image')) {
            $destination_path = 'public/image/users';
            $image = $request->file('image');
            $image_name = $request->name;
            $path = $request->file('image')->storeAs($destination_path, $image_name);

            $input['image'] = $image_name;
            DB::table('users')->where('name', $name)->update(['image' => $input['image']]);
        }

        
        DB::table('users')->where('name', $name)->update(['password' => $input['password']]);
        $newuser = DB::table('users')->where('name', $name)->first();
        $request->session()->put('userdata', $newuser);
        return redirect('home')->with('flash_message', 'Student Updated!');
    }
 
}