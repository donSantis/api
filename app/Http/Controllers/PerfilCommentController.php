<?php

namespace App\Http\Controllers;

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
        $comment->user_id = $user->id;
        $comment->perfil_id = $perfil_id;
        $comment->description = $description;

        // Guardar en la bd
        $comment->save();

        // Redirección
        return redirect()->route('home');
    }


}



