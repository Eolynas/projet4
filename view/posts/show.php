
<?php
//var_dump($post);
//var_dump(array_map('htmlspecialchars', $post));
?>
<div class="post">
    <h2><a><?= $post['title']; ?></a></h2>

    <span>Publié le <?= $post['date']; ?> par <?= $post['author']; ?> </span>
    <?php
    foreach ($nbComments as $nbComment):
        //var_dump($nbComment['nbComments']);

        if ($nbComment['nbComments'] == 1) {
            echo 'Il y a ' . $nbComment['nbComments'] . ' commentaire';
        } elseif ($nbComment['nbComments'] > 1) {
            echo 'Il y a ' . $nbComment['nbComments'] . ' commentaires';
        } else {
            echo 'Il y aucun commentaire';
        }
        ?>



    <?php endforeach; ?>



    <?php 
    if ($post['up_name'] != null){
        ?>
        <img src="public/img/<?= $post['up_name']; ?>" alt="<?= $post['up_alt']; ?>">
        
    <?php
    }
    
    ?>

    <div class="posts_content"><?= $post['content']; ?></div>

</div>
<div class="comments">
    <h3>Commentaires</h3>
    <div>
        <?php
        foreach ($comments as $comment):
            //var_dump(array_map('htmlspecialchars', $comment));
            $commentSec = array_map('htmlspecialchars', $comment);
            //var_dump($comment);
            ?>

            <div class="comment">
                <h4><?= $comment['author']; ?></h4>
                <?php
                if ($commentSec['signalComment'] == 0){
                    ?>
                        <p class="container"><span class="col-6"><?= $commentSec['date_comment']; ?></span>
                            <a class="col-2 offset-4 btn btn-secondary"
                               href="index.php?p=Comments.signal&id=<?= $comment['id'] ?>&post_id=<?= $post['idPost'] ?>"
                               role="button">Signaler
                            </a>
                        </p>
                    <?php
                } else {
                    ?>
                    <p class="container"><span class="col-6"><?= $commentSec['date_comment']; ?></span><span> Ce
                            commentaire à était signalé </span></p>
                    <?php
                }
                ?>
                <p><?= $commentSec['content']; ?></p>
            </div>

        <?php endforeach; ?>
    </div>
    <form class="form_comment" method="post" action="index.php?p=posts.addComments&id=<?= $post['idPost']; ?>">
        <div class="form-group">
            <label for="formName">Pseudo</label>
            <input type="text" class="form-control" id="formName" placeholder="pseudo" name="author" required>
        </div>
        <div class="form-group">
            <label for="formComment">Votre commentaire</label>
            <textarea class="form-control" id="formComment" rows="6" placeholder="Votre commentaire" name="content" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>