@extends('base')

@section('content')
    <div>
        <h1>Détail du contact' {{ $category->id }} : {{ $category->intitule }}</h1>

        <a href="{{ route('categories.edit', ['category' => $category]) }}">Editer</a>

        <div>
            <label for="intitule">intitule</label>
            <p id="intitule">{{ $category->intitule }}</p>
        </div>

        <div>
            <label for="description">description</label>
                <p id="description">{{ $category->description }}</p>
        </div>

        <div>
            <label for="projects">Projects</label>
                <div id="projects">
                @foreach($category->projects()->get() as $project)
                    <strong>{{ $project->intitule }}</strong>
                @endforeach
            </div>
        </div>
    </div>
@endsection