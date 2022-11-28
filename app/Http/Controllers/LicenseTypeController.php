<?php

namespace App\Http\Controllers;

use App\Models\LicenseType;
use App\Http\Requests\StoreLicenseTypeRequest;
use App\Http\Requests\UpdateLicenseTypeRequest;

class LicenseTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreLicenseTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLicenseTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LicenseType  $licenseType
     * @return \Illuminate\Http\Response
     */
    public function show(LicenseType $licenseType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LicenseType  $licenseType
     * @return \Illuminate\Http\Response
     */
    public function edit(LicenseType $licenseType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLicenseTypeRequest  $request
     * @param  \App\Models\LicenseType  $licenseType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLicenseTypeRequest $request, LicenseType $licenseType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LicenseType  $licenseType
     * @return \Illuminate\Http\Response
     */
    public function destroy(LicenseType $licenseType)
    {
        //
    }
}
