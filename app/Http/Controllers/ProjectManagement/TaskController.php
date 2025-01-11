<?php

namespace App\Http\Controllers\ProjectManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectManagement\StoreTaskRequest;
use App\Models\ProjectManagement\Etat;
use App\Models\ProjectManagement\Project;
use App\Models\ProjectManagement\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::with('etat')->where('etat_id', "<>", "2")->orderBy('deadline', 'desc')->get();
        return view('project_management.tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $task = new Task();
        $etats = Etat::all();
        $projets = Project::all();
        return view('project_management.tasks.create', compact('task', 'etats', 'projets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        Task::create($request->validated());
        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('project_management.tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        $etats = Etat::all();
        $projets = Project::all();
        return view('project_management.tasks.edit', compact('task', 'etats', 'projets'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreTaskRequest $request, Task $task)
    {
        $task->update($request->validated());
        return redirect()->route('tasks.show', compact('task'))->with('success', 'Task updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        Task::destroy($task->id);
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully');
    }
}
