<?php $nav_en_cours = 'update'; ?>

<h1>Modification</h1>


<form class="formEdit" method="post" action="index.php?p=admin.Update.update&id=<?= $update['id'] ?>">
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Titre</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="title"><?=
            $update['title']?></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Avancement</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="progress"><?=
            $update['progress']?></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="content"><?=
            $update['content']?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Modifier</button>
</form>