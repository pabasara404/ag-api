<?php

namespace App\Http\Controllers;

use App\Models\Boundaries;
use App\Http\Requests\StoreBoundariesRequest;
use App\Http\Requests\UpdateBoundariesRequest;

class BoundariesController extends Controller
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
     * @param  \App\Http\Requests\StoreBoundariesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBoundariesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Boundaries  $boundaries
     * @return \Illuminate\Http\Response
     */
    public function show(Boundaries $boundaries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Boundaries  $boundaries
     * @return \Illuminate\Http\Response
     */
    public function edit(Boundaries $boundaries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBoundariesRequest  $request
     * @param  \App\Models\Boundaries  $boundaries
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBoundariesRequest $request, Boundaries $boundaries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Boundaries  $boundaries
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boundaries $boundaries)
    {
        //
    }
}
