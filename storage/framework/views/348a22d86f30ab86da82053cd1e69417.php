<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
    </head>
    <body>
        <a href="<?php echo e(route('biens.index')); ?>">Voir les biens en user</a>
        <a href="<?php echo e(route('biens.indexAdmin')); ?>">Voir les biens en admin</a>
        <a href="<?php echo e(route('tickets.index')); ?>">Voir les tickets en user</a>
        <a href="<?php echo e(route('tickets.indexAdmin')); ?>">Voir les tickets en admin</a>
        <a href="<?php echo e(route('commentaires.index')); ?>">Voir les commentaires</a>
    </body>
</html>
<?php /**PATH C:\Users\loulo\Bureau\Laravel\Projet\resources\views/welcome.blade.php ENDPATH**/ ?>