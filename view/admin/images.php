<h1> Listes des images </h1>

<a class="btn btn-secondary" href="index.php?p=admin.images.formImage" role="button">Ajouter
    une image</a>

<ul>
    <?php
    foreach ($images as $image):
        //var_dump($image);
        ?>
        <li>
            <img class=""
                 src="public/img/<?= $image['up_name']; ?>"
                 alt="<?= $image['up_alt']; ?>" />
        </li>

    <?php endforeach; ?>
</ul>

