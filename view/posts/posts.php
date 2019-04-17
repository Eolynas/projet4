<?php

include 'update.php';

if(empty($list)){
    echo 'Il n\'y a aucun article pour le moment';
} else {
    foreach ($list as $post):
        //var_dump($post);

        ?>
        <div class="posts">
            <h2><a href="index.php?p=posts.show&id=<?= $post['idPost']; ?>"><?= $post['title']; ?></a></h2>

            <span>Publié le <?= $post['date']; ?> par <?= $post['author']; ?></span>
            <span>Il y a <?= $post['nbComments']; ?> commentaires</span>

            <img src="public/img/<?= $post['up_name']; ?>" alt="<?= $post['up_alt']; ?>" class="img_post">
            <!--<img src="https://dummyimage.com/400x200/949494.jpg&text=Image" class="img_post">-->

            <div class="posts_content"><?= substr($post['content'], 0, 250); ?> ...</div>

            <a class="btn btn-secondary" href="index.php?p=posts.show&id=<?= $post['idPost']; ?>" role="button">Lire la
                suite</a>
        </div>
    <?php endforeach; ?>
<?php
}