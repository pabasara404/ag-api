<?php

namespace App\Http\Controllers;

use App\Actions\Employee\EmployeeActions;
use App\Actions\TimberCuttingPermitApplication\TimberCuttingPermitApplicationAction;
use App\Http\Resources\TimberCuttingPermitApplicationResource;
use App\Models\TimberCuttingPermitApplication;
use App\Http\Requests\StoreTimberCuttingPermitApplicationRequest;
use App\Http\Requests\UpdateTimberCuttingPermitApplicationRequest;

class TimberCuttingPermitApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return TimberCuttingPermitApplicationResource::collection(
            TimberCuttingPermitApplication::with(
                "tree_detail",
                "tree_count",
                "boundaries",
                "land_detail",
                "deed_detail",
                "gn_division")->get()
        );
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
     * @param  \App\Http\Requests\StoreTimberCuttingPermitApplicationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(
        StoreTimberCuttingPermitApplicationRequest $request
    )
    {
        TimberCuttingPermitApplicationAction::store($request->toArray());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TimberCuttingPermitApplication  $timberCuttingPermitApplication
     * @return \Illuminate\Http\Response
     */
    public function show(TimberCuttingPermitApplication $timberCuttingPermitApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TimberCuttingPermitApplication  $timberCuttingPermitApplication
     * @return \Illuminate\Http\Response
     */
    public function edit(TimberCuttingPermitApplication $timberCuttingPermitApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTimberCuttingPermitApplicationRequest  $request
     * @param  \App\Models\TimberCuttingPermitApplication  $timberCuttingPermitApplication
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTimberCuttingPermitApplicationRequest $request, TimberCuttingPermitApplication $timberCuttingPermitApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TimberCuttingPermitApplication  $timberCuttingPermitApplication
     * @return \Illuminate\Http\Response
     */
    public function destroy(TimberCuttingPermitApplication $timberCuttingPermitApplication)
    {
        //
    }
}
