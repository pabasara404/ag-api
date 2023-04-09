<?php

namespace App\Http\Controllers;

use App\Models\TreeCount;
use App\Http\Requests\StoreTreeCountRequest;
use App\Http\Requests\UpdateTreeCountRequest;

class TreeCountController extends Controller
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
     * @param  \App\Http\Requests\StoreTreeCountRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTreeCountRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TreeCount  $treeCount
     * @return \Illuminate\Http\Response
     */
    public function show(TreeCount $treeCount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TreeCount  $treeCount
     * @return \Illuminate\Http\Response
     */
    public function edit(TreeCount $treeCount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTreeCountRequest  $request
     * @param  \App\Models\TreeCount  $treeCount
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTreeCountRequest $request, TreeCount $treeCount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TreeCount  $treeCount
     * @return \Illuminate\Http\Response
     */
    public function destroy(TreeCount $treeCount)
    {
        //
    }
}
