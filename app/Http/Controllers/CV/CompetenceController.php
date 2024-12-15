<?php

namespace App\Http\Controllers\CV;

use App\Http\Controllers\Controller;
use App\Http\Requests\CV\CompetenceRequest;
use App\Models\CV\Competence;
use Illuminate\Http\Request;

class CompetenceController extends Controller
{
    function index() {
        $competences = Competence::query()->orderBy('priorite', 'desc')->get();
        return view('skill.index', compact('competences'));
    }

    function create(Request $request) {
        return view('skill.create');
    }

    function store(CompetenceRequest $request) {
        $competence = Competence::create($request->validated());
        return redirect()->route('skill.index')->with('success', 'La compétence a été créée !');
    }

    function show(Competence $skill) {
        return view('skill.show', [
            'competence' => $skill
        ]);
    }

    function edit(Competence $skill) {
        return view('skill.edit', [
            'skill' => $skill
        ]);
    }

    function update(Competence $skill, CompetenceRequest $request) {
        $skill->update($request->validated());
        return redirect()->route('skill.show', ['skill' => $skill])->with('success', 'l\'article a été modifié !');
    }

    function delete(Competence $skill) {
        Competence::destroy($skill->id);
        return redirect()->route('skill.index');
    }
}
