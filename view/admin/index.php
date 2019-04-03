<h1>BIENVENUE SUR LE DASHBOARD ADMIN</h1>


<h3>Liste des articles</h3>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Titre</th>
            <th scope="col">Contenu</th>
            <th scope="col">n° Chapitre</th>
            <th scope="col">Auteur</th>
            <th scope="col">Date</th>
            <th scope="col">nb de commentaire</th>
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
                <td><?= substr($post['content'], 0, 100); ?></td>
                <td><?= $post['id_category']; ?></td>
                <td><?= $post['author']; ?></td>
                <td><?= $post['date']; ?></td>
                <td><?= $post['nbComments']; ?></td>
                <td><a class="btn btn-secondary" href="index.php?p=admin.posts.postEdit&id=<?= $post['id']; ?>" role="button">Modifier</a></td>
                <td><a class="btn btn-secondary" href="index.php?p=admin.posts.delete&id=<?= $post['id']; ?>" role="button">Supprimer</a></td>
            </tr>  


        <?php endforeach; ?>

    </tbody>
</table>