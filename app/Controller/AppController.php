<?php

namespace App\Controller;

use Core\Controller\Controller;
use App;


class AppController{
    
    protected function loadPosts() {
        //Instance de la class PostTable
        $this->posts = new \App\Table\PostTable;
        
    }
    
    protected function render($list) {
        ob_start();
        extract($list);
        require('view/posts/posts.php');
        $content = ob_get_clean();
        require('view/templates/templateDefault.php');
    }
    
    
    

}