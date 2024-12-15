<div>
    <h1>Détail de la competence {{ $competence->id }} : {{ $competence->intitule }}</h1>

    <a href="{{ route('skill.edit', ['skill' => $competence]) }}">Editer</a>

    <div>
        <label for="intitule">Intitule</label>
        <p name="intitule" id="intitule">{{ $competence->intitule }}</p>
    </div>

    <div>
        <label for="descripion">Description</label>
        <p name="description" id="descripion">{{ $competence->description }}</p>
    </div>

    <div>
        <label for="priorite">Priorite</label>
        <p name="priorite" id="priorite">{{ $competence->priorite }}</p>
    </div>
</div>
