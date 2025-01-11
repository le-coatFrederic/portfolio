@extends('base')

@section('content')
    <div>
        <h1>Détail de la tâche {{ $task->id }} : {{ $task->intitule }}</h1>
        <a href="{{ route('tasks.edit', ['task' => $task]) }}">Editer</a>
        <table>
            <thead>
            <tr>
                <td>ID</td>
                <td>Intitule</td>
                <td>Description</td>
                <td>Deadline</td>
                <td>Status</td>
                <td>Projet</td>
                <td>Etat</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->intitule }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->deadline }}</td>
                <td>{{ $task->status }}</td>
                <td>{{ $task->project->intitule }}</td>
                <td>{{ $task->etat->intitule }}</td>
            </tr>
            </tbody>
        </table>

        <form action="{{ route('actions.create') }}" method="post">
            @csrf

            <input type="hidden" name="actionable_type" value="{{ \App\Models\ProjectManagement\Task::class }}">
            <input type="hidden" name="actionable_id" value="{{ $task->id }}">

            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" name="type" id="type">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" id="description">
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" id="date" value="{{ now()->format("mm/dd/yyyy") }}">
            </div>

            <button type="submit">Ajouter action</button>

        </form>

        <table>
            <thead>
            <tr>
                <td>ID</td>
                <td>Type</td>
                <td>Description</td>
                <td>Date</td>
            </tr>
            </thead>
            <tbody>
            @foreach($task->actions()->get() as $action)
                <tr>
                    <td>{{ $action->id }}</td>
                    <td>{{ $action->type }}</td>
                    <td>{{ $action->description }}</td>
                    <td>{{ $action->date }}</td>
                    <td><a href="{{ route('actions.edit', ['action' => $action]) }}">Editer</a></td>
                    <td><a href="{{ route('actions.delete', ['action' => $action]) }}">Supprimer</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection