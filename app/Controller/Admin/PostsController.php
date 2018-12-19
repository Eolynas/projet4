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
        $this->loadCategory();
        

    }
    
    public function index () {
        // On charge les données de la table Posts
        $list = $this->posts->lastPosts();
        $list = $this->render(compact('list'), 'admin/index', 'admin');
        
    }
    
    public function postEdit() {
        $list = $this->posts->insertPost($_POST['title'], $_POST['content'], $_POST['category']);
        var_dump($list);
        $list = $this->posts->lastPosts();
        $list = $this->render(compact('list'), 'admin/index', 'admin');
    }
    
    public function getCategory(){
        $category = $this->category->getListCategory();
        $list = $this->render($category, 'admin/categories', 'admin');
    }
    
    public function delete () {
        $post = $this->posts->delete($_GET['id']);
        $list = $this->posts->lastPosts();
        $list = $this->render(compact('list'), 'admin/index', 'admin');
    }
    
    public function edit () {
        $category = $this->category->getListCategory();
        //var_dump($category);
        $list = $this->render($category, 'admin/edit', 'admin');
    }
    
    
    public function insertPost(){
        
    }
    
    
}
