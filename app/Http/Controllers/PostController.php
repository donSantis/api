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
        $image_path = $request->file('image_path');


        $user = \Auth::user();
        $post = new Post();
        if ($image_path) {
            // Poner nombre unico
            $image_path_name = time() . $image_path->getClientOriginalName();

            // Guardar en la carpeta storage (storage/app/users)
            Storage::disk('post')->put($image_path_name, File::get($image_path));

            // Seteo el nombre de la imagen en el objeto
            $post->image = $image_path_name;
        }

        $post->user_id = $user->id;
        $post->title = $title;
        $post->description = $description;




        $post->save();
        return redirect()->route('home')
            ->with(['message' => 'Usuario actualizado correctamente']);
    }

    public function getImagePost($filename)
    {
        $file = Storage::disk('post')->get($filename);
        return new Response($file, 200);
    }


}
