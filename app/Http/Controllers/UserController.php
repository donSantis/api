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

    }
    public function config(){

        return view('user.user-config');
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
