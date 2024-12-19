<?php

namespace App\Http\Controllers\ProjectManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectManagement\StoreEtatRequest;
use App\Models\ProjectManagement\Etat;

class EtatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etats = Etat::all();
        return view('project_management.etats.index', compact('etats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $etat = new Etat();
        return view('project_management.etats.create', compact('etat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEtatRequest $request)
    {
        Etat::create($request->validated());
        return redirect()->route('etats.index')->with('success', 'Etat has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Etat $etat)
    {
        return view('project_management.etats.show', compact('etat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etat $etat)
    {
        return view('project_management.etats.edit', compact('etat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreEtatRequest $request, Etat $etat)
    {
        $etat->update($request->validated());
        return redirect()->route('etats.show', compact('etat'))->with('success', 'Etat has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etat $etat)
    {
        Etat::destroy($etat->id);
        return redirect()->route('etats.index')->with('success', 'Etat has been deleted successfully.');
    }
}
