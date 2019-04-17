<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Jean Forteroche</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <ul class="navbar-nav">
        <?php
        if (isset($_SESSION['login'])){
            ?>
            <ul class="navbar-nav">
                <li class="navbar-brand">
                    <a>Bonjour <?php echo $_SESSION['login'] . ' niv' . $_SESSION['power'] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?p=admin.posts.index">admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?p=users.deconnexion">Déconnexion</a>
                </li>
            </ul>
            <?php
        } else {
            ?>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#loginModal">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#registerModal"">Inscription</a>
                    </li>
                </ul>
            <?php

        }

        ?>

        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Connexion</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php include 'login.php'; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php include 'register.php'; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</nav>