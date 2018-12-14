<?php

namespace App\Controller;



class PostsController extends AppController{
    
    public $render;

    public function __construct(){
        $this->loadPosts();
        //$this->loadCategories();

    }
    
    public function index () {
//        $App = \App::getInstance();
//        $App->getDb();
        // On charge les données de la table Posts
        //$list = $this->posts->saveLastPosts();
        $list = $this->posts->lastPosts();
        $list = compact('list');
        $list = $this->render($list);

    }
    

}