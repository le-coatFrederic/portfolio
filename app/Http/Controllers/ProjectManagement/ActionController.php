<?php

namespace App\Http\Controllers\ProjectManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectManagement\StoreActionRequest;
use App\Http\Requests\ProjectManagement\UpdateActionRequest;
use App\Models\ProjectManagement\Action;
use App\Models\ProjectManagement\Incident;
use App\Models\ProjectManagement\Task;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actions = Action::with('actionable')
            ->whereHas('actionable', function ($query) {
                $query->whereHas('project', function ($query) {});
            })
            ->orderBy('project.id', 'asc')
            ->get();
        dd($actions);

        return view('project_management.actions.index', compact('actions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $action = new Action();
        return view('project_management.actions.create', compact('action'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActionRequest $request)
    {
        $actionable = null;
        if ($request->validated()['actionable_type'] == Task::class) {
            $actionable = Task::findOrFail($request->validated()['actionable_id']);
        } elseif ($request->validated()['actionable_type'] == Incident::class) {
            $actionable = Incident::findOrFail($request->validated()['actionable_id']);
        } else {
            return redirect()->back()->with('success', 'ERROR : This model is not actionable !');
        }

        $actionable->actions()->create($request->validated());
        return redirect()->back()->with('success', 'Action created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Action $action)
    {
        return view('project_management.actions.show', compact('action'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Action $action, Incident|Task $actionable, string $type)
    {
        return view('project_management.actions.edit', compact('action', 'actionable', 'type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreActionRequest $request, Action $action)
    {
        $action->update($request->validated());
        return redirect()->route('actions.show', compact('action'))->with('success', 'Action updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Action $action)
    {
        Action::destroy($action->id);
        return redirect()->back()->with('success', 'Action deleted successfully.');
    }
}
