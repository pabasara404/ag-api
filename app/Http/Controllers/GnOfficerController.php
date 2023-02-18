<?php

namespace App\Http\Controllers;

use App\Models\GnOfficer;
use App\Http\Requests\StoreGnOfficerRequest;
use App\Http\Requests\UpdateGnOfficerRequest;

class GnOfficerController extends Controller
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
     * @param  \App\Http\Requests\StoreGnOfficerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGnOfficerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GnOfficer  $gnOfficer
     * @return \Illuminate\Http\Response
     */
    public function show(GnOfficer $gnOfficer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GnOfficer  $gnOfficer
     * @return \Illuminate\Http\Response
     */
    public function edit(GnOfficer $gnOfficer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGnOfficerRequest  $request
     * @param  \App\Models\GnOfficer  $gnOfficer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGnOfficerRequest $request, GnOfficer $gnOfficer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GnOfficer  $gnOfficer
     * @return \Illuminate\Http\Response
     */
    public function destroy(GnOfficer $gnOfficer)
    {
        //
    }
}
