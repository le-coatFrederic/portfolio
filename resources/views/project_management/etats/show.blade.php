@extends('base')

@section('content')
    <div>
        <h1>Détail de l'état {{ $etat->id }} : {{ $etat->intitule }}</h1>

        <a href="{{ route('etats.edit', ['etat' => $etat]) }}">Editer</a>

        <div>
            <label for="intitule">intitule</label>
            <p id="intitule">{{ $etat->intitule }}</p>
        </div>

        <div>
            <label for="description">description</label>
                <p id="description">{{ $etat->description }}</p>
        </div>
    </div>
@endsection