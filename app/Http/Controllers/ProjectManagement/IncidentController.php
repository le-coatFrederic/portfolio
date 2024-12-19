<?php

namespace App\Http\Controllers\ProjectManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectManagement\StoreIncidentRequest;
use App\Models\ProjectManagement\Incident;

class IncidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incidents = Incident::all();
        return view('project_management.incidents.index', compact('incidents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $incident = new Incident();
        return view('project_management.incidents.create', compact('incident'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIncidentRequest $request)
    {
        Incident::create($request->validated());
        return redirect()->route('incidents.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Incident $incident)
    {
        return view('project_management.incidents.show', compact('incident'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Incident $incident)
    {
        return view('project_management.incidents.edit', compact('incident'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreIncidentRequest $request, Incident $incident)
    {
        $incident->update($request->validated());
        return redirect()->route('incidents.show', compact('incident'))->with('success', 'Incident updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Incident $incident)
    {
        Incident::destroy($incident->id);
        return redirect()->route('incidents.index')->with('success', 'Incident deleted successfully');
    }
}
