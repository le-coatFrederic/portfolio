<div>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Intitule</td>
                <td>Description</td>
                <td>Priorite</td>
            </tr>
        </thead>
        <tbody>
            @foreach($competences as $competence)
                <tr>
                    <td>{{ $competence->id }}</td>
                    <td>{{ $competence->intitule }}</td>
                    <td>{{ $competence->description }}</td>
                    <td>{{ $competence->priorite  }}</td>
                    <td><a href="{{ route('skill.show', ['skill' => $competence]) }}">Détail</a></td>
                    <td><a href="{{ route('skill.delete', ['skill' => $competence]) }}">Supprimer</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
