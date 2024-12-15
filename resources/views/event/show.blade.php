<div>
    <h1>Détail de l'évènement' {{ $event->id }} : {{ $event->intitule }}</h1>

    <a href="{{ route('event.edit', ['event' => $event]) }}">Editer</a>

    <div>
        <label for="intitule">Intitule</label>
        <p name="intitule" id="intitule">{{ $event->intitule }}</p>
    </div>

    <div>
        <label for="etablissement">Etablissement</label>
        <p name="etablissement" id="etablissement">{{ $event->etablissement }}</p>
    </div>

    <div>
        <label for="lieu">Lieu</label>
        <p name="lieu" id="lieu">{{ $event->lieu }}</p>
    </div>

    <div>
        <label for="descripion">Description</label>
        <p name="description" id="descripion">{{ $event->description }}</p>
    </div>

    <div>
        <label for="date_debut">Date de début</label>
        <p name="date_debut" id="date_debut">{{ $event->date_debut }}</p>
    </div>

    <div>
        <label for="date_fin">Date de fin</label>
        <p name="date_fin" id="date_fin">{{ $event->date_fin }}</p>
    </div>

    <div>
        <label for="type_evenement">Type d'évènement</label>
        <p name="type_evenement" id="type_evenement">{{ $event->type_evenement }}</p>
    </div>
</div>
