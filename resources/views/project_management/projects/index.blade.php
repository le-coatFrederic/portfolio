@extends('base')

@section('content')
    <div>
        <a href="{{ route('projects.create') }}">Créer un projet</a>
        <table>
            <thead>
            <tr>
                <td>ID</td>
                <td>Intitule</td>
                <td>Description</td>
                <td>Date de début</td>
                <td>Date de fin</td>
                <td>Sujet</td>
                <td>Etat</td>
            </tr>
            </thead>
            <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->intitule }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->date_debut }}</td>
                    <td>{{ $project->date_fin }}</td>
                    <td>{{ $project->sujet->intitule }}</td>
                    <td>{{ $project->etat->intitule }}</td>
                    <td><a href="{{ route('sujets.show', ['sujet' => $project]) }}">Détail</a></td>
                    <td><a href="{{ route('sujets.edit', ['sujet' => $project]) }}">Editer</a></td>
                    <td><a href="{{ route('sujets.delete', ['sujet' => $project]) }}">Supprimer</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection