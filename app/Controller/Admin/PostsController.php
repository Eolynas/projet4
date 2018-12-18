<?php

namespace App\Controller\Admin;

use Core\Controller\Controller;
/**
 * Description of postsController
 *
 * @author Eddy
 */
class PostsController extends AppController {
    
    public function __construct(){
        $this->loadPosts();
        

    }
    
    public function index () {
        // On charge les données de la table Posts
        $list = $this->posts->lastPosts();
        $list = $this->render(compact('list'), 'admin/index', 'admin');
        
    }
    
    public function delete () {
        $post = $this->posts->delete($_GET['id']);
        $list = $this->posts->lastPosts();
        $list = $this->render(compact('list'), 'admin/index', 'admin');
    }
    
    public function updatePost () {
        echo 'UPDATE';
    }
    
    public function insertPost(){
        
    }
    
    
}
