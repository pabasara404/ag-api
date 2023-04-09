<?php

namespace App\Http\Controllers;

use App\Models\TreeDetail;
use App\Http\Requests\StoreTreeDetailRequest;
use App\Http\Requests\UpdateTreeDetailRequest;

class TreeDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreTreeDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTreeDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TreeDetail  $treeDetail
     * @return \Illuminate\Http\Response
     */
    public function show(TreeDetail $treeDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TreeDetail  $treeDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(TreeDetail $treeDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTreeDetailRequest  $request
     * @param  \App\Models\TreeDetail  $treeDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTreeDetailRequest $request, TreeDetail $treeDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TreeDetail  $treeDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(TreeDetail $treeDetail)
    {
        //
    }
}
