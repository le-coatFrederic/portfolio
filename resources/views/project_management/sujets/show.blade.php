@extends('base')

@section('content')
    <div>
        <h1>Détail du sujet' {{ $sujet->id }} : {{ $sujet->intitule }}</h1>

        <a href="{{ route('sujets.edit', ['sujet' => $sujet]) }}">Editer</a>

        <div>
            <label for="intitule">Intitule</label>
            <p id="intitule">{{ $sujet->intitule }}</p>
        </div>

        <div>
            <label for="descripion">Description</label>
                <p id="descripion">{{ $sujet->description }}</p>
        </div>

        <div>
            <label for="etat">Etat</label>
                <p id="etat">{{ $sujet->etat->intitule }}</p>
        </div>

        <div>
            <label for="categories">Catégories</label>
            <div id="categories">
                @foreach($sujet->categories()->get() as $category)
                    <strong>{{ $category->intitule }}</strong>
                @endforeach
            </div>
        </div>

        <div>
            <label for="projects">Projets</label>
            <div id="projects">
                @foreach($sujet->projets()->get() as $project)
                    <strong>{{ $project->intitule }}</strong>
                @endforeach
            </div>
        </div>
    </div>
@endsection