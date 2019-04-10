

<div class="alert alert-info" role="alert">
    <p>Le site est actuellement en cours de développement, voici la liste des améliorations et leur degres
        d'avancement.</p>
    <ul>
        <?php
        foreach ($update as $post):
        //var_dump($post);
        ?>
        <li> <?= $post['title']; ?>">  | Avancement <?= $post['progress']; ?>"% </li>

        <?php endforeach; ?>
    </ul>
    <p> Vous pouvez suivre le projet sur Git en <a href="https://github.com/Eolynas/projet4" target="_blank">cliquant
     ici</a></p>
</div>