<?php

namespace App\Http\Controllers;

use App\Models\WorkDone;
use App\Http\Requests\StoreWorkDoneRequest;
use App\Http\Requests\UpdateWorkDoneRequest;

class WorkDoneController extends Controller
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
     * @param  \App\Http\Requests\StoreWorkDoneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWorkDoneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WorkDone  $workDone
     * @return \Illuminate\Http\Response
     */
    public function show(WorkDone $workDone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WorkDone  $workDone
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkDone $workDone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWorkDoneRequest  $request
     * @param  \App\Models\WorkDone  $workDone
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWorkDoneRequest $request, WorkDone $workDone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WorkDone  $workDone
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkDone $workDone)
    {
        //
    }
}
