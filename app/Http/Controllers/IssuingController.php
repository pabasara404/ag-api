<?php

namespace App\Http\Controllers;

use App\Models\Issuing;
use App\Http\Requests\StoreIssuingRequest;
use App\Http\Requests\UpdateIssuingRequest;

class IssuingController extends Controller
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
     * @param  \App\Http\Requests\StoreIssuingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIssuingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Issuing  $issuing
     * @return \Illuminate\Http\Response
     */
    public function show(Issuing $issuing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Issuing  $issuing
     * @return \Illuminate\Http\Response
     */
    public function edit(Issuing $issuing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIssuingRequest  $request
     * @param  \App\Models\Issuing  $issuing
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIssuingRequest $request, Issuing $issuing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Issuing  $issuing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Issuing $issuing)
    {
        //
    }
}
