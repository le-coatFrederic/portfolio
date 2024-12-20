<?php

namespace App\Http\Controllers\ProjectManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectManagement\StoreSujetRequest;
use App\Http\Requests\ProjectManagement\UpdateSujetRequest;
use App\Models\ProjectManagement\Sujet;

class SujetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sujets = Sujet::all();
        return view('project_management.sujets.index', compact('sujets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project_management.sujets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSujetRequest $request, Sujet $sujet)
    {
        Sujet::created($request->validated());
        return redirect()->route('sujets.show', compact('sujet'))->with('success', 'Subject created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sujet $sujet)
    {
        return view('project_management.sujets.show', compact('sujet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sujet $sujet)
    {
        return view('project_management.sujets.edit', compact('sujet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSujetRequest $request, Sujet $sujet)
    {
        $sujet->updated($request->validated());
        return redirect()->route('sujets.index')->with('success', 'Subject updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sujet $sujet)
    {
        Sujet::destroy($sujet);
        return redirect()->route('sujets.index')->with('success', 'Subject deleted successfully.');
    }
}
