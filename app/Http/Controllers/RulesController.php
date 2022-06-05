<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Rules;
use App\Http\Requests\StoreRulesRequest;
use App\Http\Requests\UpdateRulesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class RulesController extends Controller
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
        return view('rules.create');
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
        $rule = new Rules();

        if ($image_path) {
            // Poner nombre unico
            $image_path_name = time() . $image_path->getClientOriginalName();

            // Guardar en la carpeta storage (storage/app/users)
            Storage::disk('rule')->put($image_path_name, File::get($image_path));

            // Seteo el nombre de la imagen en el objeto
            $rule->image = $image_path_name;
        }else{
            $rule->image = "sin-imagen";
        }

        $rule->user_id = $user->id;
        $rule->title = $title;
        $rule->description = $description;




        $rule->save();
        return redirect()->route('home')
            ->with(['message' => 'Usuario actualizado correctamente']);
    }

    public function showRule($id)
    {
        $rule = Rules::findOrFail($id);

        return view('rules.card')->with([
            'rule' => $rule,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rules  $rules
     * @return \Illuminate\Http\Response
     */
    public function edit(Rules $rules)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRulesRequest  $request
     * @param  \App\Models\Rules  $rules
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRulesRequest $request, Rules $rules)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rules  $rules
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rules $rules)
    {
        //
    }
}
