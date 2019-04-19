<?php $nav_en_cours = 'categories'; ?>

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

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalFormCat">
        Ajouter une catégorie
    </button>
</div>

<!-- Modal add category-->
<div class="modal fade" id="modalFormCat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="formEdit" method="post" action="index.php?p=admin.categories.insertCategory">
                    <div class="form-group">
                        <label for="titleForm">Nom du chapitre</label>
                        <textarea class="form-control" id="titleForm" rows="1" name="title"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
</div>