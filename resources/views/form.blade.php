<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <form action="{{ route('biens.store') }}" method="POST">
        @csrf
        <label for="nom">Entrez votre nom : </label>
        <input type="text" name="nom" id="nom">
        <input type="submit" value="Envoyer !">
    </form>
</body>

</html>
