<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('showPosts');
    }


    public function showPost($id)
    {
        $post = Post::findOrFail($id);

        return view('post.card')->with([
            'post' => $post,
        ]);
    }

    public function create()
    {
        return view('post.create');
    }


    public function save(Request $request)
    {
        // Validación del formulario
        $validate = $this->validate($request, [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        // Recoger datos del formulario
        $title = $request->input('title');
        $description = $request->input('description');

        $user = \Auth::user();
        $post = new Post();

        $post->user_id = $user->id;
        $post->title = $title;
        $post->description = $description;
        $post->image = 'defaultImage.jpg';

        $post->save();
        return redirect()->route('home')
            ->with(['message' => 'Usuario actualizado correctamente']);
    }


}
