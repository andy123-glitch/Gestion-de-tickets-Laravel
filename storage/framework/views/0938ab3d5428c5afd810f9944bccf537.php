<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <form action="<?php echo e(route('commentaires.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        
        <label for="nom">Entrez le nom : </label>
        <input type="text" name="nom" required >
        <br />
        <label for="commentaire">Entrez le commentaire : </label>
        <textarea name="commentaire" rows="10" cols="30" required ></textarea>
        <input type="hidden" name="ticket_id" value="<?php echo e($ticket_id); ?>">
        <input type="submit" value="Ajouter le commentaire">
        
    </form>
</body>

</html>
<?php /**PATH C:\Users\loulo\Bureau\Laravel\Projet\resources\views/commentaires/ajouter.blade.php ENDPATH**/ ?>