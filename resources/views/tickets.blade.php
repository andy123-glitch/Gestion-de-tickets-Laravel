<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Ticket</title>
</head>
<body>
    <div class="text-center">Ticket :</div>
    <table class="table table-striped-columns table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">ID_biens</th>
                <th scope="col">titre</th>
                <th scope="col">description</th>
                <th scope="col">nom_usager</th>
                <th scope="col">date_saisie</th>
                <th scope="col">statut</th>
                <th scope="col">nom_statut</th>
                <th scope="col">date_statut</th>
                <th scope="col">commentaire_statut</th>        
                <th scope="col">Créé le</th>
                <th scope="col">Derneires mise a jour</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lignes as $ligne)
            <tr >
                <th scope="row">{{ $ligne->id }}</td>
                <td>{{ $ligne->id_biens }}</td>
                <td>{{ $ligne->titre }}</td>
                <td>{{ $ligne->description }}</td>
                <td>{{ $ligne->nom_usager }}</td>
                <td>{{ $ligne->date_saisie }}</td>
                <td>{{ $ligne->statut }}</td>
                <td>{{ $ligne->nom_statut }}</td>
                <td>{{ $ligne->date_statut }}</td>
                <td>{{ $ligne->commentaire_statut }}</td>   
                <td>{{ $ligne->created_at }}</td>
                <td>{{ $ligne->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>