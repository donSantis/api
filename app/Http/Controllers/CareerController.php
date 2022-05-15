<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Http\Requests\StoreCareerRequest;
use App\Http\Requests\UpdateCareerRequest;

class CareerController extends Controller
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
     * @param  \App\Http\Requests\StoreCareerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCareerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function show(Career $career)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function edit(Career $career)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCareerRequest  $request
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCareerRequest $request, Career $career)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function destroy(Career $career)
    {
        //
    }
}
