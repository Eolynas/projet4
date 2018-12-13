
<?php
foreach ($list as $post):
    //var_dump($post);
    ?>
    <div class="posts">
        <h2><?= $post['title']; ?></h2>

        <span>Publié le <?= $post['date']; ?> par <?= $post['author']; ?></span>

        <img src="<?= $post['url']; ?>" alt="<?= $post['alt']; ?>" class="img_post">

        <div class="posts_content"><?= substr($post['content'], 0, 250); ?> ...</div>

        <a class="btn btn-secondary" href="#" role="button">Lire la suite</a>
    </div>  
<?php endforeach; ?>
