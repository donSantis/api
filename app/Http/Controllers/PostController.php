<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Votes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
        }else{
            $post->image = "sin-imagen";
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

    public function delete($id){
        $user = \Auth::user();
        $post = Post::find($id);
        $comments = Comment::where('post_id', $id)->get();
        $likes = Votes::where('post_id', $id)->get();

        if($user && $post && $post->user->id == $user->id){

            // Eliminar comentarios
            if($comments && count($comments) >= 1){
                foreach($comments as $comment){
                    $comment->delete();
                }
            }

            // Eliminar los likes
            if($likes && count($likes) >= 1){
                foreach($likes as $like){
                    $like->delete();
                }
            }

            // Eliminar ficheros de Post
            Storage::disk('post')->delete($post->image);

            // Eliminar registro Post
            $post->delete();

            $message = array('message' => 'La post se ha borrado correctamente.');
        }else{
            $message = array('message' => 'La post no se ha borrado.');
        }

        return redirect()->route('home')->with($message);
    }


    public function edit($id){
        $user = \Auth::user();
        $post = Post::find($id);

        if($user && $post && $post->user->id == $user->id){
            return view('post.post-edit', [
                'post' => $post
            ]);
        }else{
            return redirect()->route('home');
        }
    }

    public function update(Request $request)
    {
        // Validación del formulario
        $validate = $this->validate($request, [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        // Recoger datos del formulario
        $post_id = $request->input('post_id');
        $title = $request->input('title');
        $description = $request->input('description');
        $image_path = $request->file('image_path');

        $post = Post::find($post_id);

        $post->title = $title;
        $post->description = $description;

        if ($image_path) {
            // Poner nombre unico
            $image_path_name = time() . $image_path->getClientOriginalName();
            // Guardar en la carpeta storage (storage/app/users)
            Storage::disk('post')->put($image_path_name, File::get($image_path));
            // Seteo el nombre de la imagen en el objeto
            $post->image = $image_path_name;
        }
        // Ejecutar consulta y cambios en la base de datos
        $post->update();

        return redirect()->route('home')
            ->with(['message' => 'Post actualizado correctamente']);
    }


}
