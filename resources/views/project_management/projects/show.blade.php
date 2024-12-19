@extends('base')

@section('content')
    <div>
        <h1>Détail du sujet' {{ $project->id }} : {{ $project->intitule }}</h1>

        <a href="{{ route('sujets.edit', ['sujet' => $project]) }}">Editer</a>

        <div>
            <label for="intitule">Intitule</label>
            <p id="intitule">{{ $project->intitule }}</p>
        </div>

        <div>
            <label for="descripion">Description</label>
                <p id="descripion">{{ $project->description }}</p>
        </div>

        <div>
            <label for="date_debut">Date de début</label>
            <p id="date_debut">{{ $project->date_debut }}</p>
        </div>

        <div>
            <label for="date_fin">Date de fin</label>
            <p id="date_fin">{{ $project->date_fin }}</p>
        </div>

        <div>
            <label for="sujet">Date de fin</label>
            <p id="sujet">{{ $project->sujet()->intitule }}</p>
        </div>

        <div>
            <label for="etat">Date de fin</label>
            <p id="etat">{{ $project->etat()->intitule }}</p>
        </div>

        <div>
            <label for="projects">Projets</label>
            <div id="projects">
                @foreach($project->projets()->get() as $project)
                    <strong>{{ $project->intitule }}</strong>
                @endforeach
            </div>
        </div>
    </div>
@endsection