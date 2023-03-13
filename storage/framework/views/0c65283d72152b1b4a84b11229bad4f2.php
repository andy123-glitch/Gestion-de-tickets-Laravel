<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <form action="<?php echo e(route('tickets.updateStateStore')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <select name="statut">
            <option value="En cours">En cours</option>
            <option value="Terminé">Terminé</option>
            <option value="Rejeté">Rejeté</option>
          </select>    
        <input type="hidden" name="idTicket" value="<?php echo e($idTicket); ?>">
        <input type="submit" value="Modifiez l'etat du ticket">
    </form>
</body>

</html>
<?php /**PATH C:\Users\loulo\Bureau\Laravel\Projet\resources\views/tickets/update.blade.php ENDPATH**/ ?>