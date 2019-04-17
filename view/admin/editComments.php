<h1>Modifier commentaire</h1>

<?php
var_dump($comment);
?>


<h3>Pseudo : <?= $comment['author'] ?></h3>
<span><?= $comment['date'] ?></span>
<form class="formEdit" method="post" action="index.php?p=admin.Comments.updateComment&id=<?= $comment['id'] ?>">
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Commentaire</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="content"><?= $comment['content'] ?></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Modifier le commentaire</button>
</form>