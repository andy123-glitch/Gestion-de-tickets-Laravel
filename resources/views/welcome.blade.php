<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
    </head>
    <body>
        <a href="{{ route('biens.index') }}">Voir les biens en user</a>
        <a href="{{ route('biens.indexAdmin') }}">Voir les biens en admin</a>
        <a href="{{ route('tickets.index') }}">Voir les tickets en user</a>
        <a href="{{ route('tickets.indexAdmin') }}">Voir les tickets en admin</a>
        <a href="{{ route('commentaires.index') }}">Voir les commentaires</a>
    </body>
</html>
