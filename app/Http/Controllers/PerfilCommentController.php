<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\user;
use App\Models\PerfilComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class PerfilCommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function save(Request $request)
    {

        // Validación
        $validate = $this->validate($request, [
            'perfil_id' => 'integer|required',
            'description' => 'required|string|max:255',
        ]);
        // Recoger datos
        $user = \Auth::user();
        $perfil_id = $request->input('perfil_id');
        $description = $request->input('description');

        // Asigno los valores a mi nuevo objeto a guardar
        $comment = new PerfilComment();
        $comment->user_id = $perfil_id; // ID DE QUIEN RECIBE EL COMMENT
        $comment->perfil_id = $user->id; // ID DE QUIEN LO REALIZA
        $comment->description = $description;

        // Guardar en la bd
        $comment->save();

        // Redirección
        return redirect()->route('user-card', [$comment->user_id])
            ->with([
                'message' => 'Comentario agregado correctamente!!'
            ]);
    }

    public function delete($id)
    {
        // Conseguir datos del usuario logueado

        // Conseguir objeto del comentario
        $comment = PerfilComment::find($id);

        // Comprobar si soy el dueño del comentario o de la publicación

        $comment->delete();

        return redirect()->route('user-card', [$comment->user_id])
            ->with([
                'message' => 'Comentario eliminado correctamente!!'
            ]);
    }


}



