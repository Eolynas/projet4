<?php

namespace Core\Controller;

class Controller{

    

    protected function render(){
        ob_start();
        
        require('view/posts/posts.php');
        $content = ob_get_clean();
        require('view/templates/templateDefault.php');
    }

   

}