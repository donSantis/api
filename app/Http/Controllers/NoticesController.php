<?php

namespace App\Http\Controllers;

use App\Models\Notices;
use App\Http\Requests\StoreNoticesRequest;
use App\Http\Requests\UpdateNoticesRequest;
use App\Models\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class NoticesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create()
    {
        return view('notices.create');
    }


    public function save(Request $request)
    {
        // Validación del formulario
        $validate = $this->validate($request, [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        // Recoger datos del formulario
        $title = $request->input('title');
        $description = $request->input('description');
        $image_path = $request->file('image_path');


        $user = \Auth::user();
        $notice = new Notices();

        if ($image_path) {
            // Poner nombre unico
            $image_path_name = time() . $image_path->getClientOriginalName();

            // Guardar en la carpeta storage (storage/app/users)
            Storage::disk('notice')->put($image_path_name, File::get($image_path));

            // Seteo el nombre de la imagen en el objeto
            $notice->image = $image_path_name;
        }else{
            $notice->image = "sin-imagen";
        }

        $notice->user_id = $user->id;
        $notice->title = $title;
        $notice->description = $description;




        $notice->save();
        return redirect()->route('home')
            ->with(['message' => 'Usuario actualizado correctamente']);
    }

    public function showNotice($id)
    {
        $notice = Notices::findOrFail($id);

        return view('notices.card')->with([
            'notice' => $notice,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notices  $notices
     * @return \Illuminate\Http\Response
     */
    public function edit(Notices $notices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNoticesRequest  $request
     * @param  \App\Models\Notices  $notices
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNoticesRequest $request, Notices $notices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notices  $notices
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notices $notices)
    {
        //
    }
}
