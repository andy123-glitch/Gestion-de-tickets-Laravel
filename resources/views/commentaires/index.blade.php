<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Ticket</title>
</head>
<body>
    <a href="/">Retour au sommaire</a>

    <div class="text-center"> <h1>Commentaires</h1></div>
    <table class="table table-striped-columns table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom </th>
                <th scope="col">Date du commentaire </th>
                <th scope="col">Commentaire </th>
                <th scope="col">ID du ticket </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lignes as $ligne)
            <tr >
                <th scope="row">{{ $ligne->id }}</td>
                <td>{{ $ligne->nom }}</td>
                <td>{{ $ligne->date_commentaire }}</td>
                <td>{{ $ligne->commentaire }}</td>
                <td>{{ $ligne->ticket_id }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>