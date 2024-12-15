@extends('base')

@section('content')
    <div>
        <h1>Détail du sujet' {{ $sujet->id }} : {{ $sujet->intitule }}</h1>

        <a href="{{ route('sujets.edit', ['sujet' => $sujet]) }}">Editer</a>

        <div>
            <label for="intitule">Intitule</label>
            <p name="intitule" id="intitule">{{ $sujet->intitule }}</p>
        </div>

        <div>
            <label for="descripion">Description</label>
            <p name="description" id="descripion">{{ $sujet->description }}</p>
        </div>
    </div>
@endsection