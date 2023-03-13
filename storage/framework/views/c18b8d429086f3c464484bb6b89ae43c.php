<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Biens</title>
</head>

<body>
    <a href="/">Retour au sommaire</a>
    <div class="text-center">
        <h1 >Biens
            <br>
        </h1>
            <?php if($role == 'admin'): ?>
            <a href="<?php echo e(route('biens.create')); ?>"><button>Ajouter un bien</button></a>
        <?php endif; ?>

    </div>

    <table class="table table-striped-columns table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Créé le</th>
                <th scope="col">Derneires mise a jour</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $lignes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ligne): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($ligne->id); ?></td>
                    <td><?php echo e($ligne->nom); ?></td>
                    <td><?php echo e($ligne->created_at); ?></td>
                    <td><?php echo e($ligne->updated_at); ?></td>
                    <?php if($role == 'admin'): ?>
                        <td class="text-center"><a href="<?php echo e(route('biens.delete', ['id' => $ligne->id])); ?>"><button>Supprimer</button></a>
                            <a href="<?php echo e(route('biens.updateView', ['id' => $ligne->id])); ?>"><button>Modifier</button></a>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

</body>

</html>
<?php /**PATH C:\Users\loulo\Bureau\Laravel\Projet\resources\views/biens/index.blade.php ENDPATH**/ ?>