- -<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fredinfo</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('contacts.index') }}">Contacts</a>
            <li><a href="{{ route('categories.index') }}">Categories</a></li>
            <li><a href="{{ route('etats.index') }}">Etats</a></li>
            <li><a href="{{ route('sujets.index') }}">Sujets</a></li>
            <li><a href="{{ route('projects.index') }}">Projets</a></li>
            <li><a href="{{ route('incidents.index') }}">Incidents</a></li>
            <li><a href="{{ route('tasks.index') }}">Tâches</a></li>
            <li><a href="{{ route('actions.index') }}">Actions</a></li>
            <li><a href="{{ route('tickets.index') }}">Tickets</a></li>
        </ul>
    </nav>

    @yield('content')
</body>
</html>