<?php

namespace App\Http\Controllers\CV;

use App\Http\Controllers\Controller;
use App\Http\Requests\CV\EvenementRequest;
use App\Models\CV\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    function index() {
        $evenements = Evenement::query()->orderBy('date_fin', 'desc')->get();
        return view('event.index', ['events' => $evenements]);
    }

    function create(Request $request) {
        return view('event.create');
    }
    function store(EvenementRequest $request) {
        $evenement = Evenement::query()->create($request->validated());
        return redirect()->route('event.index')->with('success', 'L\'évènement a été créé !');
    }

    function show(Evenement $event) {
        return view('event.show', compact('event'));
    }

    function edit(Evenement $event) {
        return view('event.edit', compact('event'));
    }

    function update(EvenementRequest $request, Evenement $event) {
        $event->update($request->validated());
        return redirect()->route('event.show', ['event' => $event])->with('success', 'L\'évènment ' . $event->intitule . ' a été mis à jour !');
    }

    function delete(Evenement $event) {
        Evenement::destroy($event->id);
        return redirect()->route('event.index');
    }
}
