<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

    }

    public function config()
    {

        return view('user.user-config');
    }

    public function update(Request $request)
    {

        // Conseguir usuario identificado
        $user = \Auth::user();
        $id = $user->id;

        // Validación del formulario
        $validate = $this->validate($request, [
            'name' => 'required|string|max:255',
            'nickname' => 'required|string|max:255|unique:users,nickname,' . $id,
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
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
            ->with(['message' => 'Usuario actualizado correctamente']);
    }

    public function updatePassword(Request $request)
    {

        // Validación del formulario
        $validate = $this->validate($request, [
            'new_password' => 'required|min:4|max:100',
            'password-confirm' => 'required|same:new_password',
        ]);

        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);


        return redirect()->route('config')
            ->with(['message' => 'Contraseña actualizada correctamente']);


    }

    public function updateImage(Request $request)
    {
        $user = \Auth::user();
        $id = $user->id;
        $image_path = $request->file('image_path');
        if ($image_path) {
            // Poner nombre unico
            $image_path_name = time() . $image_path->getClientOriginalName();

            // Guardar en la carpeta storage (storage/app/users)
            Storage::disk('users')->put($image_path_name, File::get($image_path));

            // Seteo el nombre de la imagen en el objeto
            $user->image = $image_path_name;
        }

// Ejecutar consulta y cambios en la base de datos
        $user->update();

        return redirect()->route('config')
            ->with(['message' => 'Usuario actualizado correctamente']);
    }

    public function getImage($filename){
        $file = Storage::disk('users')->get($filename);
        return new Response($file, 200);
    }


    public function index5($search = null)
    {
        if (!empty($search)) {
            $users = User::where('username', 'LIKE', '%' . $search . '%')
                ->OrWhere('lastname', 'LIKE', '%' . $search . '%')
                ->OrWhere('role', 'LIKE', '%' . $search . '%')
                ->OrWhere('phone', 'LIKE', '%' . $search . '%')
                ->OrWhere('mail', 'LIKE', '%' . $search . '%')
                ->paginate(5);
        } else {
            $users = User::orderBy('id', 'desc')->paginate(5);
        }

        return view('user.index', [
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
