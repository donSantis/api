<?php

namespace App\Http\Controllers;

use App\Models\Votes;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreVotesRequest;
use App\Http\Requests\UpdateVotesRequest;

class VotesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function save($id){

        $user = \Auth::user();
        $vote = new Votes();
        $vote->user_id = $user->id;
        $vote->post_id = $id;
        $vote->save();

    }


    public function like($post_id){
        // Recoger datos del usuario y la imagen
        $user = \Auth::user();

        // Condicion para ver si ya existe el like y no duplicarlo
        $isset_like = Votes::where('user_id', $user->id)
            ->where('post_id', $post_id)
            ->count();

        if($isset_like == 0){
            $like = new Votes();
            $like->user_id = $user->id;
            $like->post_id = (int)$post_id;

            // Guardar
            $like->save();

            return response()->json([
                'like' => $like
            ]);
        }else{
            return response()->json([
                'message' => 'El like ya existe'
            ]);
        }

    }

    public function dislike($post_id){
        // Recoger datos del usuario y la imagen
        $user = \Auth::user();

        // Condicion para ver si ya existe el like y no duplicarlo
        $like = Votes::where('user_id', $user->id)
            ->where('post_id', $post_id)
            ->first();

        if($like){

            // Eliminar like
            $like->delete();

            return response()->json([
                'like' => $like,
                'message' => 'Has dado dislike correctamente'
            ]);
        }else{
            return response()->json([
                'message' => 'El like no existe'
            ]);
        }
    }



}
