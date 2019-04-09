

<div class="alert alert-info" role="alert">
    <p>Le site est actuellement en cours de développement, voici la liste des améliorations et leur degres
        d'avancement.</p>
    <ul>
        <?php
        foreach ($update as $post):
        //var_dump($post);
        ?>
        <li> <?= $post['title']; ?>">  | Avancement <?= $post['progress']; ?>"%</li>

        <?php endforeach; ?>
    </ul>
</div>