<?php

namespace App\Http\Controllers\ProjectManagment;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectManagment\StoreEtatRequest;
use App\Http\Requests\ProjectManagment\UpdateEtatRequest;
use App\Models\ProjectManagment\Etat;

class EtatController extends Controller
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
    public function store(StoreEtatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Etat $etat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etat $etat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEtatRequest $request, Etat $etat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etat $etat)
    {
        //
    }
}
