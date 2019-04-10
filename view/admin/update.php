<h1>Les des amélioration à venir sur le site</h1>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">Titre</th>
        <th scope="col">Contenu</th>
        <th scope="col">Avancement</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($list as $post):
        //var_dump($post);
        ?>
        <tr>
            <th scope="row"><?= $post['id']; ?></th>
            <td><?= $post['title']; ?></td>
            <td><?= $post['content']; ?></td>
            <td><?= $post['progress']; ?></td>
            <td><a class="btn btn-secondary" href="index.php?p=admin.update.edit&id=<?= $post['id']; ?>"
                   role="button">Modifier</a></td>
            <td><a class="btn btn-secondary" href="index.php?p=admin.update.delete&id=<?= $post['id']; ?>" role="button">Supprimer</a></td>
        </tr>


    <?php endforeach; ?>

    </tbody>
</table>

<a class="btn btn-secondary" href="index.php?p=admin.Update.formUpdate" role="button">Ajouter une amélioration</a>
