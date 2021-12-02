<?php

namespace App\Http\Controllers;

use App\Models\jam;
use App\Http\Requests\StorejamRequest;
use App\Http\Requests\UpdatejamRequest;

class JamController extends Controller
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
     * @param  \App\Http\Requests\StorejamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorejamRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jam  $jam
     * @return \Illuminate\Http\Response
     */
    public function show(jam $jam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jam  $jam
     * @return \Illuminate\Http\Response
     */
    public function edit(jam $jam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatejamRequest  $request
     * @param  \App\Models\jam  $jam
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatejamRequest $request, jam $jam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jam  $jam
     * @return \Illuminate\Http\Response
     */
    public function destroy(jam $jam)
    {
        //
    }
}
