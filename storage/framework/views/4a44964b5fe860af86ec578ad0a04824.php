<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Ticket</title>

</head>

<body>
    <form action="<?php echo e(route('tickets.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
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
            <?php $__currentLoopData = $biens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($bien->id); ?>"><?php echo e($bien->id); ?>-<?php echo e($bien->nom); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <input type="submit" value="Ajouter le ticket">
    </form>
</body>

</html>
<?php /**PATH C:\Users\loulo\Bureau\Laravel\Projet\resources\views/tickets/ajouter.blade.php ENDPATH**/ ?>