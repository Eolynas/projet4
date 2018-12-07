<?php

namespace Core\Controller;

class Controller{

    protected $viewPath;
    protected $template;

    protected function render(){
        ob_start();
        
        require('view/posts/posts.php');
        $content = ob_get_clean();
        require('view/templates/templateDefault.php');
    }

   

}