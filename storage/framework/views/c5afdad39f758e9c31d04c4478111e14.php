<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Ticket</title>
</head>
<body>
    <div class="text-center">Ticket :</div>
    <table class="table table-striped-columns table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">ID_biens</th>
                <th scope="col">titre</th>
                <th scope="col">description</th>
                <th scope="col">nom_usager</th>
                <th scope="col">date_saisie</th>
                <th scope="col">statut</th>
                <th scope="col">nom_statut</th>
                <th scope="col">date_statut</th>
                <th scope="col">commentaire_statut</th>        
                <th scope="col">Créé le</th>
                <th scope="col">Derneires mise a jour</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $lignes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ligne): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr >
                <th scope="row"><?php echo e($ligne->id); ?></td>
                <td><?php echo e($ligne->id_biens); ?></td>
                <td><?php echo e($ligne->titre); ?></td>
                <td><?php echo e($ligne->description); ?></td>
                <td><?php echo e($ligne->nom_usager); ?></td>
                <td><?php echo e($ligne->date_saisie); ?></td>
                <td><?php echo e($ligne->statut); ?></td>
                <td><?php echo e($ligne->nom_statut); ?></td>
                <td><?php echo e($ligne->date_statut); ?></td>
                <td><?php echo e($ligne->commentaire_statut); ?></td>   
                <td><?php echo e($ligne->created_at); ?></td>
                <td><?php echo e($ligne->updated_at); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html><?php /**PATH C:\Users\loulo\Bureau\Laravel\Projet\resources\views/tickets.blade.php ENDPATH**/ ?>