<?php

namespace App\Http\Controllers\ProjectManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectManagement\StoreProjectRequest;
use App\Models\ProjectManagement\Etat;
use App\Models\ProjectManagement\Project;
use App\Models\ProjectManagement\Sujet;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with('etat', 'sujet')->get();
        return view('project_management.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $project = new Project();
        $etats = Etat::all();
        $sujets = Sujet::all();
        return view('project_management.projects.create', compact('project', 'etats', 'sujets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        Project::create($request->validated());
        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('project_management.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $etats = Etat::all();
        $sujets = Sujet::all();
        return view('project_management.projects.edit', compact('project', 'etats', 'sujets'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProjectRequest $request, Project $project)
    {
        $project->update($request->validated());
        return redirect()->route('projects.show', compact('project'))->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        Project::destroy($project->id);
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
