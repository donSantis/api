<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $post->save();
        return redirect()->route('home')
            ->with(['message' => 'Usuario actualizado correctamente']);



    }


    public function callAllPosts()
    {
        return view('post.showPosts')->with([
            'posts' => Post::all(),
        ]);

    }
    public function callPost(Request $request)
    {
        $post = $request->post();
        $text = $request->text;
        $posts = DB::table('posts')
            ->select('posts.*')
            ->Where('user_id', 'LIKE', '%' . $text . '%')
            ->OrWhere('title', 'LIKE', '%' . $text . '%')
            ->OrWhere('created_at', 'LIKE', '%' . $text . '%')
            ->paginate(5);

        return view('post.showPosts')->with([
            'posts' => $posts,
        ]);

    }
}
