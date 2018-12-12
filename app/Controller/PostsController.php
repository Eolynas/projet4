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

    }
    

}