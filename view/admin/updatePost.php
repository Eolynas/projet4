<h1>Modifier un articles</h1>
<?php
var_dump($list);
?>
?>
<form class="formEdit" method="post" action="index.php?p=admin.posts.updatePost&id=<?= $list['id'] ?>">
    <div class="form-group">
        <label for="titleForm">titre de l'article</label>
        <input type="text" class="form-control" id="titleForm" name="title" value="<?= $list['title'] ?>">
    </div>
    <div class="form-group">
        <label for="tinymce">Contenue de votre articles</label>
        <textarea class="form-control" id="tinymce" rows="10" name="content"><?= $list['content'] ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Ajouter l'article</button>
</form>