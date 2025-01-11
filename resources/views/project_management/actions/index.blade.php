@extends('base')

@section('content')
    <div>
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Actionable</td>
                    <td>Type</td>
                    <td>Description</td>
                    <td>Date</td>
                </tr>
            </thead>
            <tbody>
            @foreach($actions as $action)
                <tr>
                    <td>{{ $action->id }}</td>
                    <td>{{ $action->actionable->intitule }}</td>
                    <td>{{ $action->type }}</td>
                    <td>{{ $action->description }}</td>
                    <td>{{ $action->date }}</td>
                    <td><a href="{{ route('actions.show', ['action' => $action]) }}">Détail</a></td>
                    <td><a href="{{ route('actions.edit', ['action' => $action]) }}">Editer</a></td>
                    <td><a href="{{ route('actions.delete', ['action' => $action]) }}">Supprimer</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection