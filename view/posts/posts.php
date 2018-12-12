<div>
    <h1>Liste des articles</h1>
    <?php foreach ($list as $post): 
    ?>
    <h3><?= $post['title']; ?></h3>
    <img src="<?= $post['url']; ?>" alt="<?= $post['alt']; ?>">
    <div><?= $post['content']; ?></div>
    <?php endforeach; ?>
</div>