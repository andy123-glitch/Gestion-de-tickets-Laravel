<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Ticket</title>
</head>

<body>
    <a href="/">Retour au sommaire</a>
    <div class="text-center">
        <h1>Ticket<br>
            <a href="<?php echo e(route('tickets.create')); ?>"> <button>Ajouter un ticket</button></a>
        </h1>
    </div>
    <table class="table table-striped-columns table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">ID du biens</th>
                <th scope="col">Titre</th>
                <th scope="col">Description</th>
                <th scope="col">Nom du createur</th>
                <th scope="col">Crée le</th>
                <th scope="col">Statut</th>
                <th scope="col">Nom de statut</th>
                <th scope="col">Date du dernier statut</th>
                <th scope="col">Dernier commentaire</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $lignes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ligne): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
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
                    <td>
                        <?php if($role == 'admin'): ?>
                            <?php if($ligne->statut == 'Nouveau' || $ligne->statut == 'En cours'): ?>
                                <a href="<?php echo e(route('tickets.updateStateView', ['idTicket' => $ligne->id])); ?>"><button>Modifier l'etat</button></a>
                            <?php endif; ?>
                            <a href="<?php echo e(route('biens.showAdmin', ['id' => $ligne->id_biens])); ?>" target="_blank"> <button>Voir le bien</button></a>
                        <?php else: ?>
                            <?php if($ligne->statut == 'Nouveau' || $ligne->statut == 'En cours'): ?>
                                <a href=" <?php echo e(route('tickets.close', ['idTicket' => $ligne->id])); ?>"><button>Cloturer</button></a>
                            <?php endif; ?>
                            <a href="<?php echo e(route('biens.show', ['id' => $ligne->id_biens])); ?>" target="_blank"> <button>Voir le bien</button></a>
                        <?php endif; ?>
                        <a href="<?php echo e(route('commentaires.show', ['idTicket' => $ligne->id])); ?>" target="_blank"> <button>Voir les commentaires</button></a>
                        <a href="<?php echo e(route('commentaires.create', ['idTicket' => $ligne->id])); ?>"> <button >Ajouter un commentaire</button></a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>

</html>
<?php /**PATH C:\Users\loulo\Bureau\Laravel\Projet\resources\views/tickets/index.blade.php ENDPATH**/ ?>