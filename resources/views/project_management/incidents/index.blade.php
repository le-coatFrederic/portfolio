@extends('base')

@section('content')
    <div>
        <a href="{{ route('incidents.create') }}">Créer un incident</a>
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
            @foreach($incidents as $incident)
                <tr>
                    <td>{{ $incident->id }}</td>
                    <td>{{ $incident->intitule }}</td>
                    <td>{{ $incident->description }}</td>
                    <td>{{ $incident->project->intitule }}</td>
                    <td>{{ $incident->etat->intitule }}</td>
                    <td><a href="{{ route('incidents.show', ['incident' => $incident]) }}">Détail</a></td>
                    <td><a href="{{ route('incidents.edit', ['incident' => $incident]) }}">Editer</a></td>
                    <td><a href="{{ route('incidents.delete', ['incident' => $incident]) }}">Supprimer</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection