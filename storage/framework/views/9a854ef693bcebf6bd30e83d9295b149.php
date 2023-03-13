<!doctype html>
<html lang="fr">
<head>
 <meta charset="UTF-8">
</head>
<body>
<form action="<?php echo e(route('biens.store')); ?>" method="POST">
 <?php echo csrf_field(); ?>
 <label for="nom">Entrez votre nom : </label>
 <input type="text" name="nom" id="nom">
 <input type="submit" value="Envoyer !">
</form>
</body>
</html><?php /**PATH C:\Users\loulo\Bureau\Laravel\Projet\resources\views/bien_ajouter.blade.php ENDPATH**/ ?>