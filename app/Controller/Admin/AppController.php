<?php

namespace App\Controller\Admin;

use Core\Controller\Controller;
use App;

/**
 * Description of AppController
 *
 * @author Eddy
 */
class AppController extends Controller{
    
    protected function loadPosts() {
        //Instance de la class PostTable
        $this->posts = new \App\Table\PostTable(App::getInstance()->getDb());
        
    }
    protected function loadCategory() {
        //Instance de la class PostTable
        $this->category = new \App\Table\CategoryTable(App::getInstance()->getDb());
        
    }
    
    protected function loadComments() {
        //Instance de la class commentTable
        $this->comments = new \App\Table\CommentTable(App::getInstance()->getDb());
    }
    
    
}
