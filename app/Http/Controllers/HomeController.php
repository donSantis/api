<?php

namespace App\Http\Controllers;

use App\Models\Rules;
use App\Models\Notices;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Error\Notice;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth'); // SOLO PUEDEN INGRESAR USUARIOS LOGEADOS A ESTAS FUNCIONES
    }

    public function index()
    {
        $rules = Rules::orderBy('id', 'desc')
            ->paginate(1);

        $notices = Notices::orderBy('id', 'desc')
            ->paginate(1);

        $users = DB::table('users')
            ->select('*')
            ->get();


        $posts = Post::orderBy('id', 'desc')
            ->paginate(10);


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

    public function allPosts()
    {
        $users = DB::table('users')
            ->select('*')
            ->get();

        $posts = Post::orderBy('id', 'desc')
            ->paginate(1);

        $contenido = 'posts';
        $titulo = 'Todos los Posts';

        return view('index', [
            'users' => $users,
            'posts' => $posts,
            'contenido' => $contenido,
            'titulo' => $titulo,
        ]);

    }



}
