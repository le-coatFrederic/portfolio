@extends('base')

@section('content')
    <div>
        <a href="{{ route('contacts.create') }}">Créer un contact</a>
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>Company</td>
                    <td>Job</td>
                </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->first_name }}</td>
                    <td>{{ $contact->last_name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->company }}</td>
                    <td>{{ $contact->job_title }}</td>
                    <td><a href="mailto:{{ $contact->email }}">Contacter</a></td>
                    <td><a href="{{ route('contacts.show', ['contact' => $contact]) }}">Détail</a></td>
                    <td><a href="{{ route('contacts.edit', ['contact' => $contact]) }}">Editer</a></td>
                    <td><a href="{{ route('contacts.delete', ['contact' => $contact]) }}">Supprimer</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection