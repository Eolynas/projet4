<?php

namespace App\Controller;

use Core\Controller\Controller;
use App;



// Controller qui va parent qui se sert du core/controller pour envoyer la bonne page

class AppController{
    




    protected function loadPosts() {
        //Instance de la class PostTable
        $this->posts = new \App\Table\PostTable;
        
    }
    
    
    
    
    

}