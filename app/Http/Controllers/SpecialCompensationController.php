<?php

namespace App\Http\Controllers;

use App\Models\SpecialCompensation;
use App\Http\Requests\StoreSpecialCompensationRequest;
use App\Http\Requests\UpdateSpecialCompensationRequest;

class SpecialCompensationController extends Controller
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
     * @param  \App\Http\Requests\StoreSpecialCompensationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSpecialCompensationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SpecialCompensation  $specialCompensation
     * @return \Illuminate\Http\Response
     */
    public function show(SpecialCompensation $specialCompensation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SpecialCompensation  $specialCompensation
     * @return \Illuminate\Http\Response
     */
    public function edit(SpecialCompensation $specialCompensation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSpecialCompensationRequest  $request
     * @param  \App\Models\SpecialCompensation  $specialCompensation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSpecialCompensationRequest $request, SpecialCompensation $specialCompensation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SpecialCompensation  $specialCompensation
     * @return \Illuminate\Http\Response
     */
    public function destroy(SpecialCompensation $specialCompensation)
    {
        //
    }
}
