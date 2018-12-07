<?php

namespace App\Controller;



class PostsController extends AppController{

    public function __construct(){
        parent::__construct();
//        $this->loadModel('Post');
//        $this->loadModel('Category');

    }
    
    public function index () {
        $this->render();
        $this->loadPosts();
    }
    
    public function loadPosts(){
        echo 'on charge les articles via le model';
       
    }

}