@extends('base')

@section('content')
    <div>
        <h1>Détail de la catégorie {{ $category->id }} : {{ $category->intitule }}</h1>

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
            <label for="subjects">Subjects</label>
                <div id="subjects">
                @foreach($category->subjects()->get() as $subject)
                    <strong>{{ $subject->intitule }}</strong>
                @endforeach
            </div>
        </div>
    </div>
@endsection