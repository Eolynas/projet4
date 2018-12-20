<?php

namespace App\Controller\Admin;

use Core\Controller\Controller;

/**
 * Description of categoriesController
 *
 * @author Eddy
 */
class ImagesController extends AppController{
    
    public function __construct(){
        $this->loadPosts();
        $this->loadCategory();
        

    }
    
    public function index() {
    }
    
}

