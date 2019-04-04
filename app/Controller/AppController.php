<?php

namespace App\Controller;

use Core\Controller\Controller;
use App;


class AppController extends Controller{
    
    protected function loadPosts() {
        //Instance de la class PostTable
        $this->posts = new \App\Table\PostTable(App::getInstance()->getDb());
        
    }
    protected function loadComments() {
        //Instance de la class commentTable
        $this->comments = new \App\Table\CommentTable(App::getInstance()->getDb());
    }

    protected function loadUsers() {
        //Instance de la class commentTable
        $this->users = new \App\Table\UserTable(App::getInstance()->getDb());
    }


    
    
    
    

}