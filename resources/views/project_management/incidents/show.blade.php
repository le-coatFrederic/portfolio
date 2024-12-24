@extends('base')

@section('content')
    <div>
        <h1>Détail de l'incident {{ $incident->id }} : {{ $incident->intitule }}</h1>
        <a href="{{ route('incidents.edit', ['incident' => $incident]) }}">Editer</a>
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
                <tr>
                    <td>{{ $incident->id }}</td>
                    <td>{{ $incident->intitule }}</td>
                    <td>{{ $incident->description }}</td>
                    <td>{{ $incident->projectable->intitule }}</td>
                    <td>{{ $incident->etat->intitule }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection