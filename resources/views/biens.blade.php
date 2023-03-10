<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table table-striped-columns table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Créé le</th>
                <th scope="col">Derneires mise a jour</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lignes as $ligne)
            <tr >
                <th scope="row">{{ $ligne->id }}</td>
                <td>{{ $ligne->nom }}</td>
                <td>{{ $ligne->created_at }}</td>
                <td>{{ $ligne->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>