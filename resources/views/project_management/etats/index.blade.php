@extends('base')

@section('content')
    <div>
        <a href="{{ route('etats.create') }}">Créer un état</a>
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Intitule</td>
                    <td>Description</td>
                </tr>
            </thead>
            <tbody>
            @foreach($etats as $etat)
                <tr>
                    <td>{{ $etat->id }}</td>
                    <td>{{ $etat->intitule }}</td>
                    <td>{{ $etat->description }}</td>
                    <td><a href="{{ route('etats.show', ['etat' => $etat]) }}">Détail</a></td>
                    <td><a href="{{ route('etats.edit', ['etat' => $etat]) }}">Editer</a></td>
                    <td><a href="{{ route('etats.delete', ['etat' => $etat]) }}">Supprimer</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection