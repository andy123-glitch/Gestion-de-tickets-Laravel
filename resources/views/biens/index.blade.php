<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Biens</title>
</head>

<body>
    <a href="/">Retour au sommaire</a>
    <div class="text-center">
        <h1 >Biens
            <br>
        </h1>
            @if ($role == 'admin')
            <a href="{{ route('biens.create') }}"><button>Ajouter un bien</button></a>
        @endif

    </div>

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
                <tr>
                    <th scope="row">{{ $ligne->id }}</td>
                    <td>{{ $ligne->nom }}</td>
                    <td>{{ $ligne->created_at }}</td>
                    <td>{{ $ligne->updated_at }}</td>
                    @if ($role == 'admin')
                        <td class="text-center"><a href="{{ route('biens.delete', ['id' => $ligne->id]) }}"><button>Supprimer</button></a>
                            <a href="{{ route('biens.updateView', ['id' => $ligne->id]) }}"><button>Modifier</button></a>
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
