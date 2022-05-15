<?php

namespace App\Http\Controllers;

use App\Models\Rules;
use App\Http\Requests\StoreRulesRequest;
use App\Http\Requests\UpdateRulesRequest;

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRulesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRulesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rules  $rules
     * @return \Illuminate\Http\Response
     */
    public function show(Rules $rules)
    {
        //
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
