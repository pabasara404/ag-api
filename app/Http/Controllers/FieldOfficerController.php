<?php

namespace App\Http\Controllers;

use App\Models\FieldOfficer;
use App\Http\Requests\StoreFieldOfficerRequest;
use App\Http\Requests\UpdateFieldOfficerRequest;

class FieldOfficerController extends Controller
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
     * @param  \App\Http\Requests\StoreFieldOfficerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFieldOfficerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FieldOfficer  $fieldOfficer
     * @return \Illuminate\Http\Response
     */
    public function show(FieldOfficer $fieldOfficer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FieldOfficer  $fieldOfficer
     * @return \Illuminate\Http\Response
     */
    public function edit(FieldOfficer $fieldOfficer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFieldOfficerRequest  $request
     * @param  \App\Models\FieldOfficer  $fieldOfficer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFieldOfficerRequest $request, FieldOfficer $fieldOfficer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FieldOfficer  $fieldOfficer
     * @return \Illuminate\Http\Response
     */
    public function destroy(FieldOfficer $fieldOfficer)
    {
        //
    }
}
