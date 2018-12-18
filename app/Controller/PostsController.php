<?php

namespace App\Controller;

use Core\Controller\Controller;

class PostsController extends AppController{
    

    public function __construct(){
        $this->loadPosts();
        //$this->loadCategories();
        $this->loadComments();

    }
    
    /**
     * Description: $this->posts est un PDO Statment ou on recupere les derniers posts
       via LastPosts
     * 
     */
    public function index () {
        // On charge les données de la table Posts
        $list = $this->posts->lastPosts();
        //var_dump($list['id']);
        $nbComments = $this->comments->countComments(1);
        //var_dump($nbComments);
        $list = $this->render(compact('list', 'nbComments'), 'posts/posts', 'default');
        //var_dump($list);
        
    }
    
    /**
     * Description: $this->postsCat est un PDO Statment ou on recupere le post passé en paramatre
     * 
     */
    public function show() {
        $post = $this->posts->findPost($_GET['id']);
        $comments = $this->posts->comment($_GET['id']);
        $nbComments = $this->comments->countComments($_GET['id']);
        //$post = compact('post');
        $post = $this->render(compact('post', 'comments', 'nbComments'), 'posts/show', 'show');
    }
    
    

}