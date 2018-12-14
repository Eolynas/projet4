
<?php ?>
<div class="post">
    <h2><a><?= $post['title']; ?></a></h2>

    <span>Publié le <?= $post['date']; ?> par <?= $post['author']; ?> </span>

    <img src="<?= $post['url']; ?>" alt="<?= $post['alt']; ?>" class="img_post">

    <div class="posts_content"><?= $post['content']; ?></div>

</div>
<div class="comments">
    <h3>Commentaires</h3>
    <div>
        <?php foreach ($comments as $comment):
            ?>

            <div class="comment">
                <h4><?= $comment['author']; ?></h4>
                <p class="container"><span class="col-6"><?= $comment['date']; ?></span><a class="col-2 offset-4 btn btn-secondary" href="#" role="button">Signaler</a></p>
                <p><?= $comment['content']; ?></p>
            </div>

        <?php endforeach; ?>
    </div>
    <form class="form_comment">
        <div class="form-group">
            <label for="formName">Pseudo</label>
            <input type="text" class="form-control" id="formName" aria-describedby="emailHelp" placeholder="pseudo" required>
        </div>
        <div class="form-group">
            <label for="formComment">Votre commentaire</label>
            <textarea class="form-control" id="formComment" rows="6" placeholder="Votre commentaire" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>