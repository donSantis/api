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

    public function docentes()
    {
        $users = User::all();


        return view('user.docentes', compact('users'));
    }
    public function docente($id)
    {
        $user = User::findOrFail($id);


        return view('user.docente', compact('user'));
    }

    public function config()
    {

        return view('user.user-config');
    }

    public function showUser($id)
    {
        $user = User::findOrFail($id);

        return view('user.card')->with([
            'user' => $user,
        ]);

    }

    public function update(Request $request)
    {

        // Conseguir usuario identificado
        $user = \Auth::user();
        $id = $user->id;

        // Validación del formulario
        $validate = $this->validate($request, [
            'name' => 'required|string|max:50',
            'nickname' => 'required|string|max:25|unique:users,nickname,' . $id,
            'lastname' => 'required|string|max:50',
            'description' => 'required|string|max:255',
            'phrase' => 'required|string|max:155',
            'interest' => 'required|string|max:155',
            'info1' => 'required|string|max:155',
            'info2' => 'required|string|max:155',
            'info3' => 'required|string|max:155',
            'phone' => 'required|digits:8',
        ]);

        // Recoger datos del formulario
        $name = $request->input('name');
        $nickname = $request->input('nickname');
        $lastname = $request->input('lastname');
        $phone = $request->input('phone');
        $description = $request->input('description');
        $info1 = $request->input('info1');
        $info2 = $request->input('info2');
        $info3 = $request->input('info3');
        $phrase = $request->input('phrase');
        $interest = $request->input('interest');

        // Asignar nuevos valores al objeto del usuario
        $user->name = $name;
        $user->nickname = $nickname;
        $user->lastname = $lastname;
        $user->phone = $phone;
        $user->description = $description;
        $user->phrase = $phrase;
        $user->interest = $interest;
        $user->info1 = $info1;
        $user->info2 = $info2;
        $user->info3 = $info3;



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
            if($user->image != 'defaultImage.jpg'){
                Storage::disk('users')->delete($user->image);
            }
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

    public function getImage($filename)
    {
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



}
