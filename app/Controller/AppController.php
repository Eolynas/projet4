<?php

namespace App\Controller;

use Core\Controller\Controller;
use App;


class AppController{
    
    protected function loadPosts() {
        //Instance de la class PostTable
        $this->posts = new \App\Table\PostTable(App::getInstance()->getDb());
        
    }
    protected function loadComments() {
        //Instance de la class commentTable
        $this->comments = new \App\Table\commentTable(App::getInstance()->getDb());
    }


    protected function render($list, $view, $template) {
        ob_start();
        //var_dump($list);
        extract($list);
        //var_dump($list);
        require('view/posts/' . $view . '.php');
        $content = ob_get_clean();
        require('view/templates/' . $template . '.php');
    }
    
    
    

}