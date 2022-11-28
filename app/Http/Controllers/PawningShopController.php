<?php

namespace App\Http\Controllers;

use App\Models\PawningShop;
use App\Http\Requests\StorePawningShopRequest;
use App\Http\Requests\UpdatePawningShopRequest;

class PawningShopController extends Controller
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
     * @param  \App\Http\Requests\StorePawningShopRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePawningShopRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PawningShop  $pawningShop
     * @return \Illuminate\Http\Response
     */
    public function show(PawningShop $pawningShop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PawningShop  $pawningShop
     * @return \Illuminate\Http\Response
     */
    public function edit(PawningShop $pawningShop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePawningShopRequest  $request
     * @param  \App\Models\PawningShop  $pawningShop
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePawningShopRequest $request, PawningShop $pawningShop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PawningShop  $pawningShop
     * @return \Illuminate\Http\Response
     */
    public function destroy(PawningShop $pawningShop)
    {
        //
    }
}
