<?php

namespace App\Http\Controllers\ProjectManagment;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectManagment\StoreSujetRequest;
use App\Http\Requests\ProjectManagment\UpdateSujetRequest;
use App\Models\ProjectManagment\Sujet;

class SujetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSujetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sujet $sujet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sujet $sujet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSujetRequest $request, Sujet $sujet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sujet $sujet)
    {
        //
    }
}
