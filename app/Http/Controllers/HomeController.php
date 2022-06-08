<?php

namespace App\Http\Controllers;

use App\Models\Rules;
use App\Models\Notices;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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
        $posts = Post::orderBy('id', 'desc')
            ->paginate(3);

        $contenido = 'posts';
        $titulo = 'Todos los Posts';
        $paginator = true;

        return view('index', [
            'posts' => $posts,
            'contenido' => $contenido,
            'titulo' => $titulo,

        ]);

    }
    public function allRules()
    {
        $rules = Rules::orderBy('id', 'desc')
            ->paginate(10);

        $contenido = 'rules';
        $titulo = 'Todos las reglas';

        return view('index', [
            'rules' => $rules,
            'contenido' => $contenido,
            'titulo' => $titulo,

        ]);

    }
    public function allNotices()
    {
        $notices = Notices::orderBy('id', 'desc')
            ->paginate(10);

        $contenido = 'notices';
        $titulo = 'Todas las noticias';

        return view('index', [
            'notices' => $notices,
            'contenido' => $contenido,
            'titulo' => $titulo,

        ]);

    }

    public function allUsers()
    {
        $users = User::orderBy('id', 'desc')
            ->paginate(5);

        $contenido = 'users';
        $titulo = 'Todos los usuarios';

        return view('index', [
            'users' => $users,
            'contenido' => $contenido,
            'titulo' => $titulo,

        ]);

    }



}
