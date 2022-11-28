<?php

namespace App\Http\Controllers;

use App\Models\WorkToDo;
use App\Http\Requests\StoreWorkToDoRequest;
use App\Http\Requests\UpdateWorkToDoRequest;

class WorkToDoController extends Controller
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
     * @param  \App\Http\Requests\StoreWorkToDoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWorkToDoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WorkToDo  $workToDo
     * @return \Illuminate\Http\Response
     */
    public function show(WorkToDo $workToDo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WorkToDo  $workToDo
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkToDo $workToDo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWorkToDoRequest  $request
     * @param  \App\Models\WorkToDo  $workToDo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWorkToDoRequest $request, WorkToDo $workToDo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WorkToDo  $workToDo
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkToDo $workToDo)
    {
        //
    }
}
