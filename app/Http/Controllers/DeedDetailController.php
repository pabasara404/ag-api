<?php

namespace App\Http\Controllers;

use App\Models\DeedDetail;
use App\Http\Requests\StoreDeedDetailRequest;
use App\Http\Requests\UpdateDeedDetailRequest;

class DeedDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreDeedDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDeedDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DeedDetail  $deedDetail
     * @return \Illuminate\Http\Response
     */
    public function show(DeedDetail $deedDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DeedDetail  $deedDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(DeedDetail $deedDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDeedDetailRequest  $request
     * @param  \App\Models\DeedDetail  $deedDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDeedDetailRequest $request, DeedDetail $deedDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DeedDetail  $deedDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeedDetail $deedDetail)
    {
        //
    }
}
