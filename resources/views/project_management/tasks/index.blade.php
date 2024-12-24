@extends('base')

@section('content')
    <div>
        <a href="{{ route('tasks.create') }}">Créer une tâche</a>
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Intitule</td>
                    <td>Description</td>
                    <td>Projet</td>
                    <td>Etat</td>
                </tr>
            </thead>
            <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->intitule }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->projectable->intitule }}</td>
                    <td>{{ $task->etat->intitule }}</td>
                    <td><a href="{{ route('tasks.show', ['task' => $task]) }}">Détail</a></td>
                    <td><a href="{{ route('tasks.edit', ['task' => $task]) }}">Editer</a></td>
                    <td><a href="{{ route('tasks.delete', ['task' => $task]) }}">Supprimer</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection