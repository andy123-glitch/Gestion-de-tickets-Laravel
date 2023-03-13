<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
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
            <?php $__currentLoopData = $lignes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ligne): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr >
                <th scope="row"><?php echo e($ligne->id); ?></td>
                <td><?php echo e($ligne->nom); ?></td>
                <td><?php echo e($ligne->created_at); ?></td>
                <td><?php echo e($ligne->updated_at); ?></td>
                <td><a href="<?php echo e(route('admin.biens.delete', ['id' => $ligne->id])); ?>"><button>Supprimer</button></a>
                    <a href="<?php echo e(route('admin.biens.updateView', ['id' => $ligne->id])); ?>"><button>Modifier</button></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <a href="<?php echo e(route('admin.biens.create')); ?>"><button>Ajouter une ligne</button></a>
</body>
</html><?php /**PATH C:\Users\loulo\Bureau\Laravel\Projet\resources\views/biens/admin/index.blade.php ENDPATH**/ ?>