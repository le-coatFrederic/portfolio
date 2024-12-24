@extends('base')

@section('content')
    <div>
        <h1>Détail du contact {{ $contact->id }} : {{ $contact->first_name }} {{ $contact->last_name }}</h1>

        <a href="{{ route('contacts.edit', ['contact' => $contact]) }}">Editer</a>

        <div>
            <label for="firstname">Firstname</label>
            <p id="firstname">{{ $contact->first_name }}</p>
        </div>

        <div>
            <label for="lastname">Lastname</label>
                <p id="lastname">{{ $contact->last_name }}</p>
        </div>

        <div>
            <label for="email">Email</label>
            <p id="email">{{ $contact->email }}</p>
        </div>

        <div>
            <label for="phone">Phone</label>
            <p id="phone">{{ $contact->phone }}</p>
        </div>

        <div>
            <label for="companny">Company</label>
            <p id="companny">{{ $contact->company }}</p>
        </div>

        <div>
            <label for="projects">Projects</label>
                <div id="projects">
                @foreach($contact->projects()->get() as $project)
                    <strong>{{ $project->intitule }}</strong>
                @endforeach
            </div>
        </div>
    </div>
@endsection