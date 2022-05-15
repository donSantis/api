<?php

namespace App\Http\Controllers;

use App\Models\User;
Use Illuminate\Support\Facades\Hash;
Use Illuminate\Support\Facades\Auth;
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

    public function update(Request $request){

        // Conseguir usuario identificado
        $user = \Auth::user();
        $id = $user->id;

        // Validación del formulario
        $validate = $this->validate($request, [
            'name' => 'required|string|max:255',
            'nickname' => 'required|string|max:255|unique:users,nickname,'.$id,
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'phone' => 'required|integer|',
        ]);

        // Recoger datos del formulario
        $name = $request->input('name');
        $nickname = $request->input('nickname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $section = $request->input('section');
        $role = $request->input('role');

        // Asignar nuevos valores al objeto del usuario
        $user->name = $name;
        $user->nickname = $nickname;
        $user->lastname = $lastname;
        $user->email = $email;
        $user->phone = $phone;
        $user->section = $section;
        $user->role = $role;


        // Ejecutar consulta y cambios en la base de datos
        $user->update();

        return redirect()->route('config')
            ->with(['message'=>'Usuario actualizado correctamente']);
    }

    public function updatePassword(Request $request){

        // Validación del formulario
        $validate = $this->validate($request, [
            'old-password' => 'required',
            'new_password' => 'required|min:4|max:100',
            'confirm_password' => 'required|same:new_password',
        ]);

        $password = Auth::user()->password;
        if(Hash::check($request->oldpassword,$password)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();


            return redirect()->route('config')
                ->with(['message' => 'Contraseña actualizada correctamente']);

        }else{
            return redirect()->route('config')
                ->with(['message' => 'Contraseña no actualizada ']);
        }
    }


    public function index5 ($search = null){
        if(!empty($search)){
            $users = User::where('username', 'LIKE', '%' . $search . '%')
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
