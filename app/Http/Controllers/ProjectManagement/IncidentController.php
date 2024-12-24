<?php

namespace App\Http\Controllers\ProjectManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectManagement\StoreIncidentRequest;
use App\Models\ProjectManagement\Etat;
use App\Models\ProjectManagement\Incident;
use App\Models\ProjectManagement\Project;

class IncidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incidents = Incident::with('etat')->get();
        return view('project_management.incidents.index', compact('incidents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $incident = new Incident();
        $etats = Etat::all();
        $projets = Project::all();
        return view('project_management.incidents.create', compact('incident', 'etats', 'projets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIncidentRequest $request)
    {
        $project = Project::findOrFail($request->validated()['projectable_id']);
        $project->incidents()->create($request->validated());

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
        $etats = Etat::all();
        $projets = Project::all();
        return view('project_management.incidents.edit', compact('incident', 'etats', 'projets'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreIncidentRequest $request, Incident $incident)
    {
        if ($incident->projectable_id != $request->validated()['projectable_id']) {
            $projet = Project::findOrFail($request->validated()['projectable_id']);
            $incident->projectable()->associate($projet);
        }

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
