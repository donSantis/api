<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function save(Request $request)
    {

        // Validación
        $validate = $this->validate($request, [
            'post_id' => 'integer|required',
            'description' => 'required|string|max:255',
        ]);

        // Recoger datos
        $user = \Auth::user();
        $post_id = $request->input('post_id');
        $description = $request->input('description');

        // Asigno los valores a mi nuevo objeto a guardar
        $comment = new Comment();
        $comment->user_id = $user->id;
        $comment->post_id = $post_id;
        $comment->description = $description;

        // Guardar en la bd
        $comment->save();

        // Redirección
        return redirect()->route('home');
    }


}



