<h1>Modifier un articles</h1>

<form class="formEdit" method="post" action="index.php?p=admin.posts.updatePost&id=<?= $list['id'] ?>">
    <div class="form-group">
        <label for="titleForm">titre de l'article</label>
        <input type="text" class="form-control" id="titleForm" name="title" value="<?= $list['title'] ?>">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Contenue de votre articles</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="content"><?= $list['content'] ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Ajouter l'article</button>
</form>