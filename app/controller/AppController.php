<?php

namespace App\Controller;

use Core\Controller\Controller;
use \App;


// Controller qui va parent qui se sert du core/controller pour envoyer la bonne page

class AppController extends Controller{
    
    public function __construct(){
        $this->viewPath = '/app/Views/';
    }
    
    //methode pour les enfants afin de charger la bonne page
    protected function loadModel($model_name){
        $this->$model_name = App::getInstance()->getTable($model_name);
    }
    

}