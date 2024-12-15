<div>
    <a href="{{ route('event.create') }}">Créer un évènement</a>
    <table>
        <thead>
        <tr>
            <td>ID</td>
            <td>Intitule</td>
            <td>Etablissement</td>
            <td>Lieu</td>
            <td>Description</td>
            <td>Date de début</td>
            <td>Date de fin</td>
            <td>Type d'évènement</td>
        </tr>
        </thead>
        <tbody>
        @foreach($events as $event)
            <tr>
                <td>{{ $event->id }}</td>
                <td>{{ $event->intitule }}</td>
                <td>{{ $event->etablissement }}</td>
                <td>{{ $event->lieu }}</td>
                <td>{{ $event->description }}</td>
                <td>{{ $event->date_debut  }}</td>
                <td>{{ $event->date_fin }}</td>
                <td>{{ $event->type_evenement  }}</td>
                <td><a href="{{ route('event.show', ['event' => $event]) }}">Détail</a></td>
                <td><a href="{{ route('event.delete', ['event' => $event]) }}">Supprimer</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
