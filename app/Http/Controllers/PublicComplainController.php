<?php

namespace App\Http\Controllers;

use App\Models\PublicComplain;
use App\Http\Requests\StorePublicComplainRequest;
use App\Http\Requests\UpdatePublicComplainRequest;

class PublicComplainController extends Controller
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
     * @param  \App\Http\Requests\StorePublicComplainRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePublicComplainRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PublicComplain  $publicComplain
     * @return \Illuminate\Http\Response
     */
    public function show(PublicComplain $publicComplain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PublicComplain  $publicComplain
     * @return \Illuminate\Http\Response
     */
    public function edit(PublicComplain $publicComplain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePublicComplainRequest  $request
     * @param  \App\Models\PublicComplain  $publicComplain
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePublicComplainRequest $request, PublicComplain $publicComplain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PublicComplain  $publicComplain
     * @return \Illuminate\Http\Response
     */
    public function destroy(PublicComplain $publicComplain)
    {
        //
    }
}
