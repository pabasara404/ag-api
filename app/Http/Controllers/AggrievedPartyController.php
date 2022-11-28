<?php

namespace App\Http\Controllers;

use App\Models\AggrievedParty;
use App\Http\Requests\StoreAggrievedPartyRequest;
use App\Http\Requests\UpdateAggrievedPartyRequest;

class AggrievedPartyController extends Controller
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
     * @param  \App\Http\Requests\StoreAggrievedPartyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAggrievedPartyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AggrievedParty  $aggrievedParty
     * @return \Illuminate\Http\Response
     */
    public function show(AggrievedParty $aggrievedParty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AggrievedParty  $aggrievedParty
     * @return \Illuminate\Http\Response
     */
    public function edit(AggrievedParty $aggrievedParty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAggrievedPartyRequest  $request
     * @param  \App\Models\AggrievedParty  $aggrievedParty
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAggrievedPartyRequest $request, AggrievedParty $aggrievedParty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AggrievedParty  $aggrievedParty
     * @return \Illuminate\Http\Response
     */
    public function destroy(AggrievedParty $aggrievedParty)
    {
        //
    }
}
