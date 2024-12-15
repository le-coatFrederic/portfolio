@extends('base')

@section('content')
    <div>
        <a href="{{ route('sujets.create') }}">Créer un sujet</a>
        <table>
            <thead>
            <tr>
                <td>ID</td>
                <td>Intitule</td>
                <td>Description</td>
            </tr>
            </thead>
            <tbody>
            @foreach($sujets as $sujet)
                <tr>
                    <td>{{ $sujet->id }}</td>
                    <td>{{ $sujet->intitule }}</td>
                    <td>{{ $sujet->description }}</td>
                    <td><a href="{{ route('sujets.show', ['sujet' => $sujet]) }}">Détail</a></td>
                    <td><a href="{{ route('sujets.delete', ['sujet' => $sujet]) }}">Supprimer</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection