<?php

namespace App\Controller;



class PostsController extends AppController{
    
    public $render;

    public function __construct(){
        $this->loadPosts();
        //$this->loadCategories();

    }
    
    public function index () {
        // On charge les données de la table Posts
        $list = $this->posts->lastPosts();
        // On charge les données de la table Categories
        $list = compact('list');
        $list = $this->render($list);
//        ob_start();
//        require('view/posts/posts.php');
//        $content = ob_get_clean();
//        require('view/templates/templateDefault.php');
    }
    protected function render($list) {
        ob_start();
        extract($list);
        require('view/posts/posts.php');
        $content = ob_get_clean();
        require('view/templates/templateDefault.php');
    }

}