<div class="listCategories">
    <h3>Liste des articles</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">n° du Chapitre</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($list as $post):
                //var_dump($post);
                ?>
                <tr>
                    <th scope="row"><?= $post['id']; ?></th>
                    <td><?= $post['name']; ?></td>
                    <td><a class="btn btn-secondary" href="index.php?p=admin.posts.update&id=<?= $post['id']; ?>" role="button">Modifier</a></td>
                    <td><a class="btn btn-secondary" href="index.php?p=admin.posts.delete&id=<?= $post['id']; ?>" role="button">Supprimer</a></td>
                </tr>  



            <?php endforeach; ?>

        </tbody>
    </table>

    <button type="submit" class="btn btn-primary">Ajouter une catégories</button>
</div>