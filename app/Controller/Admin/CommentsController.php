<?php


namespace App\Controller\Admin;

use Core\Controller\Controller;

/**
 * Description of categoriesController
 *
 * @author Eddy
 */
class CommentsController extends AppController{
    
    public function __construct(){
        $this->loadComments();
        

    }
    
    public function index() {
        $comments = $this->comments->lastComments();
        //var_dump($comments);
        $comments = $this->render($comments, 'admin/comments', 'admin');
    }
    
    public function delete () {
        $post = $this->comments->delete($_GET['id']);
        $comments = $this->comments->lastComments();
        //var_dump($comments);
        $comments = $this->render($comments, 'admin/comments', 'admin');
    }
    
    public function edit (){
        //var_dump($_GET['id']);
        $comment = $this->comments->getComment($_GET['id']);
        //var_dump($comments);
        $comment = $this->render(compact('comment'), 'admin/editComments', 'admin');
    }
    
    public function updateComment(){
//        var_dump($_GET['id']);
//        var_dump($_POST['content']);
        $comment = $this->comments->updateComment($_POST['content'], $_GET['id']);
        //var_dump($comments);
        $comments = $this->comments->lastComments();
        //var_dump($comments);
        $comments = $this->render($comments, 'admin/comments', 'admin');
    }
    
}
