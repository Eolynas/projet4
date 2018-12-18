
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Eddy Hubert">
        <link rel="icon" href="../../favicon.ico">

        <title><?= App::getInstance()->title; ?></title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="public/css/style.css" rel="stylesheet" type="text/css"/>
        

    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">DashBoard Administration</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ajouter un articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Catégorie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Images</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Commentaires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">retour sur le site</a>
                    </li>
                </ul>

            </div>
        </nav>
        
        <section class="container">
            <div class="row">
                
                <div class="col-12 col-xl-12 blog">
                    <?= $content; ?>
                </div>

            </div>
        </section> 
        <footer>
            
        </footer>
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
    
</html>
