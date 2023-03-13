<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <form action="{{ route('tickets.updateStateStore') }}" method="POST">
        @csrf
        <select name="statut">
            <option value="En cours">En cours</option>
            <option value="Terminé">Terminé</option>
            <option value="Rejeté">Rejeté</option>
          </select>    
        <input type="hidden" name="idTicket" value="{{$idTicket}}">
        <input type="submit" value="Modifiez l'etat du ticket">
    </form>
</body>

</html>
