<?php

/**
 * Description of commentsController
 *
 * @author Eddy
 */
namespace App\Controller;

use Core\Controller\Controller;

class CommentsController extends AppController{
    
    public function __construct(){
        $this->loadPosts();
        //$this->loadCategories();
        $this->loadComments();

    }
    
    public function signal(){
        var_dump($_GET['id']);
        var_dump($_GET['post_id']);
        
        $comment = $this->comments->signal($_GET['id']);
        
        //On affiche de nouveau le post apres signalement
        $post = $this->posts->findPost($_GET['post_id']);
        $comments = $this->posts->comment($_GET['post_id']);
        $nbComments = $this->comments->countComments($_GET['post_id']);
        //$post = compact('post');
        $post = $this->render(compact('post', 'comments', 'nbComments'), 'posts/show', 'show');
        
    }
    
}
