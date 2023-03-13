<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <table class="table table-striped-columns table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Créé le</th>
                <th scope="col">Derneires mise a jour</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><?php echo e($ligne->id); ?></td>
                <td><?php echo e($ligne->nom); ?></td>
                <td><?php echo e($ligne->created_at); ?></td>
                <td><?php echo e($ligne->updated_at); ?></td>
            </tr>
        </tbody>
    </table>
    <form action="<?php echo e(route('admin.biens.updateData')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="nom">Entrez le nouveau nom du bien : </label>
        <input type="text" name="nom" id="nom">
        <input type="hidden" name="id" value="<?php echo e($ligne->id); ?>">
        <input type="submit" value="Modifiez le bien">
    </form>
</body>

</html>
<?php /**PATH C:\Users\loulo\Bureau\Laravel\Projet\resources\views/biens/admin/form/update.blade.php ENDPATH**/ ?>