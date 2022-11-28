<?php

namespace App\Http\Controllers;

use App\Models\LicenseIssuing;
use App\Http\Requests\StoreLicenseIssuingRequest;
use App\Http\Requests\UpdateLicenseIssuingRequest;

class LicenseIssuingController extends Controller
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
     * @param  \App\Http\Requests\StoreLicenseIssuingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLicenseIssuingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LicenseIssuing  $licenseIssuing
     * @return \Illuminate\Http\Response
     */
    public function show(LicenseIssuing $licenseIssuing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LicenseIssuing  $licenseIssuing
     * @return \Illuminate\Http\Response
     */
    public function edit(LicenseIssuing $licenseIssuing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLicenseIssuingRequest  $request
     * @param  \App\Models\LicenseIssuing  $licenseIssuing
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLicenseIssuingRequest $request, LicenseIssuing $licenseIssuing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LicenseIssuing  $licenseIssuing
     * @return \Illuminate\Http\Response
     */
    public function destroy(LicenseIssuing $licenseIssuing)
    {
        //
    }
}
