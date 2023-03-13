<!doctype html>
<html lang="fr">
<head>
 <meta charset="UTF-8">
</head>
<body>
<form action="<?php echo e(route('admin.biens.store')); ?>" method="POST">
 <?php echo csrf_field(); ?>
 <label for="nom">Entrez le nom du bien : </label>
 <input type="text" name="nom" id="nom">
 <input type="submit" value="Ajouter le bien">
</form>
</body>
</html><?php /**PATH C:\Users\loulo\Bureau\Laravel\Projet\resources\views/biens/admin/form/ajouter.blade.php ENDPATH**/ ?>