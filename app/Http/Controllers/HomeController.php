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
            ->join('users', 'rules.user_id', '=', 'users.id')
            ->select('rules.*', 'users.name as name'
                , 'users.image as imgUser'
                , 'users.nickname as nickname'
                , 'rules.user_id as rulesUserId')
            ->paginate(1);

        $notices = DB::table('notices')
            ->join('users', 'notices.user_id', '=', 'users.id')
            ->select('notices.*', 'users.name as name'
            , 'users.image as imgUser'
            , 'users.nickname as nickname'
                , 'notices.user_id as noticeUserId')
            ->paginate(3);

        $users = DB::table('users')
            ->select('*')
            ->get();

        $posts = DB::table('posts')
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->select('posts.*', 'users.name as name'
                , 'users.image as imgUser'
                , 'users.nickname as nickname'
                , 'posts.user_id as postUserId')
            ->paginate(5);

        $contenido = 'index';
        $titulo = 'Inicio';

        return view('index', [
            'notices' => $notices,
            'rules' => $rules,
            'users' => $users,
            'posts' => $posts,
            'contenido' => $contenido,
            'titulo' => $titulo,
        ]);

    }

}
