<?php

namespace App\Http\Controllers;

use App\Models\LandDetail;
use App\Http\Requests\StoreLandDetailRequest;
use App\Http\Requests\UpdateLandDetailRequest;

class LandDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreLandDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLandDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LandDetail  $landDetail
     * @return \Illuminate\Http\Response
     */
    public function show(LandDetail $landDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LandDetail  $landDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(LandDetail $landDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLandDetailRequest  $request
     * @param  \App\Models\LandDetail  $landDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLandDetailRequest $request, LandDetail $landDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LandDetail  $landDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(LandDetail $landDetail)
    {
        //
    }
}
