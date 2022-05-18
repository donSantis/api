<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $rules = DB::table('rules')
            ->join('users','rules.user_id','=','users.id')
            ->select('rules.*','users.name as name')
            ->get();

        $notices = DB::table('notices')
            ->join('users','notices.user_id','=','users.id')
            ->select('notices.*','users.name as name')
            ->get();

        $users = DB::table('users')
            ->select('*')
            ->get();

        $posts = DB::table('posts')
            ->join('users','posts.user_id','=','users.id')
            ->select('posts.*','users.name as name','posts.user_id as postUserId')
            ->paginate(10);

        $contenido = 'index';
        $titulo = 'Inicio';

        return view('index',[
            'notices' => $notices,
            'rules' => $rules,
            'users' => $users,
            'posts' => $posts,
            'contenido' => $contenido,
            'titulo' => $titulo,
        ]);

    }

}
