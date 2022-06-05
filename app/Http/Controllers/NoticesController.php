<?php

namespace App\Http\Controllers;

use App\Models\Notices;
use App\Http\Requests\StoreNoticesRequest;
use App\Http\Requests\UpdateNoticesRequest;
use App\Models\Rules;

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
     * @param  \App\Http\Requests\StoreNoticesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNoticesRequest $request)
    {
        //
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
