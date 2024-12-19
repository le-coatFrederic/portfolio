@extends('base')

@section('content')
    <div>
        <a href="{{ route('categories.create') }}">Créer une catégorie</a>
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Intitule</td>
                    <td>Description</td>
                </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->intitule }}</td>
                    <td>{{ $category->description }}</td>
                    <td><a href="{{ route('categories.show', ['category' => $category]) }}">Détail</a></td>
                    <td><a href="{{ route('categories.edit', ['category' => $category]) }}">Editer</a></td>
                    <td><a href="{{ route('categories.delete', ['category' => $category]) }}">Supprimer</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection