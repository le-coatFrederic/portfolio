@extends('base')

@section('content')
    <div>
        <h1>Détail du projet {{ $project->id }} : {{ $project->intitule }}</h1>

        <a href="{{ route('projects.edit', ['project' => $project]) }}">Editer</a>

        <div>
            <label for="intitule">Intitule</label> <p id="intitule">{{ $project->intitule }}</p>
        </div>

        <div>
            <label for="descripion">Description</label> <p id="descripion">{{ $project->description }}</p>
        </div>

        <div>
            <label for="date_debut">Date de début</label> <p id="date_debut">{{ $project->date_debut }}</p>
        </div>

        <div>
            <label for="date_fin">Date de fin</label> <p id="date_fin">{{ $project->date_fin }}</p>
        </div>

        <div>
            <label for="sujet">Date de fin</label> <p id="sujet">{{ $project->sujet->intitule }}</p>
        </div>

        <div>
            <label for="etat">Date de fin</label> <p id="etat">{{ $project->etat->intitule }}</p>
        </div>

        <div>
            <label for="contacts">Contacts</label>
            <div id="contacts">
                @foreach($project->contacts()->get() as $contact)
                    <p><strong>{{ $contact->first_name }} {{ $contact->last_name }}</strong> <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a> {{ $contact->pivot->role }}</p>
                @endforeach
            </div>
        </div>
    </div>
@endsection