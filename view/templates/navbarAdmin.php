<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">DashBoard Administration</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if ($nav_en_cours == 'index') {echo 'active';} ?>">
                <a class="nav-link" href="index.php?p=admin.posts.index">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?php if ($nav_en_cours == 'addForm') {echo 'active';} ?>">
                <a class="nav-link" href="index.php?p=admin.posts.addForm">Ajouter un articles</a>
            </li>
            <li class="nav-item <?php if ($nav_en_cours == 'images') {echo 'active';} ?>">
                <a class="nav-link" href="index.php?p=admin.images.index">Images</a>
            </li>
            <li class="nav-item <?php if ($nav_en_cours == 'categories') {echo 'active';} ?>">
                <a class="nav-link" href="index.php?p=admin.categories.index">Catégorie</a>
            </li>
            <li class="nav-item <?php if ($nav_en_cours == 'comments') {echo 'active';} ?>">
                <a class="nav-link" href="index.php?p=admin.comments.index">Commentaires</a>
            </li>
            <li class="nav-item <?php if ($nav_en_cours == 'update') {echo 'active';} ?>">
                <a class="nav-link" href="index.php?p=admin.update.index">Amélioration </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">retour sur le site</a>
            </li>
        </ul>

    </div>
</nav>