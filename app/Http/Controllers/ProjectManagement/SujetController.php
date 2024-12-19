<?php

namespace App\Http\Controllers\ProjectManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectManagement\StoreSujetRequest;
use App\Models\ProjectManagement\Category;
use App\Models\ProjectManagement\Etat;
use App\Models\ProjectManagement\Sujet;

class SujetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sujets = Sujet::with('etat', 'categories')->get();
        return view('project_management.sujets.index', compact('sujets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sujet = new Sujet();
        $etats = Etat::select('id', 'intitule')->get();
        $categories = Category::select('id', 'intitule')->get();
        return view('project_management.sujets.create', compact('sujet', 'etats', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSujetRequest $request)
    {
        $sujet = Sujet::create($request->validated());
        $sujet->categories()->sync($request->validated()['categories']);
        return redirect()->route('sujets.index')->with('success', 'Subject created successfully.');
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
        $etats = Etat::select('id', 'intitule')->get();
        $categories = Category::select('id', 'intitule')->get();
        return view('project_management.sujets.edit', compact('sujet', 'etats', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreSujetRequest $request, Sujet $sujet)
    {
        $sujet->update($request->validated());
        $sujet->categories()->sync($request->validated()['categories']);
        return redirect()->route('sujets.index')->with('success', 'Subject updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sujet $sujet)
    {
        Sujet::destroy($sujet->id);
        return redirect()->route('sujets.index')->with('success', 'Subject deleted successfully.');
    }
}
