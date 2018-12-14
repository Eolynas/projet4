<?php

namespace App\Controller;



class PostsController extends AppController{
    

    public function __construct(){
        $this->loadPosts();
        //$this->loadCategories();

    }
    
    /**
     * Description: $this->posts est un PDO Statment ou on recupere les derniers posts
       via LastPosts
     * 
     */
    public function index () {
        // On charge les données de la table Posts
        $list = $this->posts->lastPosts();
        $list = compact('list');
        $list = $this->render($list, 'posts', 'default');

    }
    
    /**
     * Description: $this->postsCat est un PDO Statment ou on recupere le post passé en paramatre
     * 
     */
    public function show() {
        $post = $this->posts->findPost($_GET['id']);
        $comments = $this->posts->comment($_GET['id']);
        //$post = compact('post');
        $post = $this->render(compact('post', 'comments'), 'show', 'show');
    }
    
    

}