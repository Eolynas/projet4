<?php

namespace Core\Controller;

class Controller{

    

    protected function render($list, $view, $template) {
        ob_start();
        //var_dump($list);
        extract($list);
        //var_dump($list);
        require('view/'. $view . '.php');
        $content = ob_get_clean();
        require('view/templates/' . $template . '.php');
    }

   

}