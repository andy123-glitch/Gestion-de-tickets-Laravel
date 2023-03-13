<!doctype html>
<html lang="fr">
<head>
 <meta charset="UTF-8">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<form action="{{ route('biens.store') }}" method="POST">
 @csrf
 <label for="nom">Entrez le nom du bien : </label>
 <input type="text" name="nom" id="nom" required>
 <input type="submit" value="Ajouter le bien">
</form>
</body>
</html>