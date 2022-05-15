<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index (){

        $users = DB::table('users')
            ->select('*')
            ->get();

        $posts = DB::table('posts')
            ->select('*')
            ->get();
        $contenido = 'index';
        $titulo = 'index';

        return view('index',[
            'users' => $users,
            'posts' => $posts,
            'contenido' => $contenido,
            'titulo' => $titulo,
        ]);
    }

    public function index2 (){
        $users = DB::table('users')
            ->select('*')
            ->get();
        $posts = DB::table('posts')
            ->select('*')
            ->get();
        $contenido = 'posts';
        $titulo = 'posts';

        return view('index',[
            'users' => $users,
            'posts' => $posts,
            'contenido' => $contenido,
            'titulo' => $titulo,
        ]);
    }

    public function index3 (){
        $users = DB::table('users')
            ->select('*')
            ->get();
        $posts = DB::table('posts')
            ->select('*')
            ->get();
        $contenido = 'users';
        $titulo = 'Users';

        return view('index',[
            'users' => $users,
            'posts' => $posts,
            'contenido' => $contenido,
            'titulo' => $titulo,
        ]);
    }

    public function index5 ($search = null){
        if(!empty($search)){
            $users = User::where('nick', 'LIKE', '%'.$search.'%')
                ->OrWhere('username', 'LIKE', '%' . $search . '%')
                ->OrWhere('lastname', 'LIKE', '%' . $search . '%')
                ->OrWhere('role', 'LIKE', '%' . $search . '%')
                ->OrWhere('phone', 'LIKE', '%' . $search . '%')
                ->OrWhere('mail', 'LIKE', '%' . $search . '%')
                ->paginate(5);
        }else{
            $users = User::orderBy('id', 'desc')->paginate(5);
        }

        return view('user.index',[
            'users' => $users
        ]);
    }


    public function callAllUsers()
    {
        return view('user.showUsers')->with([
            'users' => User::all(),
        ]);

    }
    public function callUser(Request $request)
    {
        $user = $request->user();
        $text = $request->text;
        $users = DB::table('users')
            ->select('users.*')
            ->Where('name', 'LIKE', '%' . $text . '%')
            ->OrWhere('lastname', 'LIKE', '%' . $text . '%')
            ->OrWhere('role', 'LIKE', '%' . $text . '%')
            ->OrWhere('phone', 'LIKE', '%' . $text . '%')
            ->OrWhere('mail', 'LIKE', '%' . $text . '%')
            ->paginate(5);

        return view('user.user')->with([
            'users' => $users,
        ]);

    }
}
