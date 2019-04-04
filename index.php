<?php

$patch = "app/App.php";
require $patch;


//On charge l'autoloader
App::load();

// On verifier en 1er si il y a un get d'envoyer, et le stock dans la variable $actions
if(isset($_GET['p'])){
    $page = $_GET['p'];
}else{
    $page = 'posts.index';
    
}


$page = explode('.', $page);
if($page[0] == 'admin'){
    if ($_SESSION['power'] == 9){
        $controller = '\App\Controller\Admin\\' . ucfirst($page[1]) . 'Controller';
        $action = $page[2];
    } else {
        echo ' vous n\'ete pas admin, merci de vous connecter';
        header('Location: index.php');
    }
}
/*if($page[0] == 'admin'){
    $controller = '\App\Controller\Admin\\' . ucfirst($page[1]) . 'Controller';
    $action = $page[2];
}*/
else{
    $controller = '\App\Controller\\' . ucfirst($page[0]) . 'Controller';
    $action = $page[1];
}
$controller = new $controller();
$controller->$action();





// On recupere le get et on le stock dans $page
// On explose le get pour savoir si il faut rediriger vers une page admin, et si non, vers qu'elle page rediriger
// le .index de posts.index sert à appeler la méthode index du controller en question ( par defaut PostsController->$index() )
// La function appelé via le controller fait appel au méthode du model pour afficher la view