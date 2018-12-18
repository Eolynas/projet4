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
            <a class="navbar-brand" href="index.php">Jean Forteroche</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">menu 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">menu 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=admin.posts.index">admin</a>
                    </li>


                </ul>

            </div>
        </nav>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://dummyimage.com/1920x600/949494.jpg&text=First+Slide" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://dummyimage.com/1920x600/949494.jpg&text=Second+Slide" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://dummyimage.com/1920x600/949494.jpg&text=Third+Slide" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>



        <section class="container">
            <div class="row">
                <div class="col-12 col-xl-8 blog">
                    <?= $content; ?>
                </div>

                <div class="col-12 col-xl-4 sidebar">
                    <div class="widget widget_newletter">
                        <h3 class="widget_title">Inscription à la newletter</h3>
                    </div>
                    <div class="widget widget_aboutme">
                        <h3 class="widget_title">A propos de moi</h3>
                    </div>
                    <div class="widget widget_reseaux">
                        <h3 class="widget_title">Social</h3>
                    </div>
                    <div class="widget widget_categories">
                        <h3 class="widget_title">Catégories</h3>
                    </div>

                </div>
            </div>
        </section> 
        <footer>
            <?php include 'footer.php'; ?>
        </footer>
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
    
</html>
