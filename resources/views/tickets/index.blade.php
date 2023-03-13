<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Ticket</title>
</head>

<body>
    <a href="/">Retour au sommaire</a>
    <div class="text-center">
        <h1>Ticket<br>
            <a href="{{ route('tickets.create') }}"> <button>Ajouter un ticket</button></a>
        </h1>
    </div>
    <table class="table table-striped-columns table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">ID du biens</th>
                <th scope="col">Titre</th>
                <th scope="col">Description</th>
                <th scope="col">Nom du createur</th>
                <th scope="col">Crée le</th>
                <th scope="col">Statut</th>
                <th scope="col">Nom de statut</th>
                <th scope="col">Date du dernier statut</th>
                <th scope="col">Dernier commentaire</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lignes as $ligne)
                <tr>
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
                    <td>
                        @if ($role == 'admin')
                            @if ($ligne->statut == 'Nouveau' || $ligne->statut == 'En cours')
                                <a href="{{ route('tickets.updateStateView', ['idTicket' => $ligne->id]) }}"><button>Modifier l'etat</button></a>
                            @endif
                            <a href="{{ route('biens.showAdmin', ['id' => $ligne->id_biens]) }}" target="_blank"> <button>Voir le bien</button></a>
                        @else
                            @if ($ligne->statut == 'Nouveau' || $ligne->statut == 'En cours')
                                <a href=" {{ route('tickets.close', ['idTicket' => $ligne->id]) }}"><button>Cloturer</button></a>
                            @endif
                            <a href="{{ route('biens.show', ['id' => $ligne->id_biens]) }}" target="_blank"> <button>Voir le bien</button></a>
                        @endif
                        <a href="{{ route('commentaires.show', ['idTicket' => $ligne->id]) }}" target="_blank"> <button>Voir les commentaires</button></a>
                        <a href="{{ route('commentaires.create', ['idTicket' => $ligne->id]) }}"> <button >Ajouter un commentaire</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
