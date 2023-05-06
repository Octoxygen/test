<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Posts;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use SebastianBergmann\Type\NullType;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse {
        $input = $request->all();

        $user = $request->session()->get('user');

        if ($request->hasFile('image')) {
            $destination_path = 'public/image/posts';
            $image = $request->file('image');
            $image_name = $user . "-" . Carbon::now()->timestamp;
            $path = $request->file('image')->storeAs($destination_path, $image_name);

            $input['image'] = $image_name;
        }

        Posts::create([
            'title' => $input['title'],
            'image' => $request->hasFile('image')? $input['image'] : null,
            'text' => $input['text'],
            'user_name' => $user
        ]);
        return redirect('home')->with('flash_message', 'Student Added');
    }

    /** 
     * Display the specified resource.
     */
    public function show(string $id): View {
        if ($id != "random") {
            $post = DB::table('posts')->where('post_id', $id)->first();
        } else {
            $post = Posts::inRandomOrder()->first();
        }
        return view('content')->with('post', $post);
    }

    public function random() {
        return redirect('/post/random');
    }
}
