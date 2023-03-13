<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Ticket</title>

</head>

<body>
    <form action="{{ route('tickets.store') }}" method="POST">
        @csrf
        <label for="titre">Entrez le titre du tickets : </label>
        <input type="text" name="titre" required>
        <br />
        <label for="description">Entrez la description du tickets : </label>
        <textarea name="description" rows="10" cols="30" required></textarea>
        <br>
        <label for="nom">Entrez votre nom : </label>
        <input type="text" name="nom" id="nom" required>
        <br>
        <label for="nom">Entrez votre email : </label>
        <input type="email" name="email" required>
        <br>
        <select name="idBiens">
            @foreach ($biens as $bien)
                <option value="{{ $bien->id }}">{{ $bien->id }}-{{ $bien->nom }}</option>
            @endforeach
        </select>

        <input type="submit" value="Ajouter le ticket">
    </form>
</body>

</html>
