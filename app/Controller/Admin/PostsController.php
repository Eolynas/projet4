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
        $this->loadImages();

    }
    
    public function index () {
        // On charge les données de la table Posts
        $list = $this->posts->lastPosts();
        $list = $this->render(compact('list'), 'admin/index', 'admin');
        
    }
    
    /**
     * Description: Appel le formulaire d'ajout d'un article
     * On recupere via la BDD la liste des catégory
     *
     *
     * Description: Call form for add posts
     * We recover the BDD the list of categories
     *
     */
    public function addForm () {
        $category = $this->category->getListCategory();

        //var_dump($category);
        $list = $this->render($category, 'admin/addPost', 'admin');
    }

    /**
     * Description: ajout du post
     *
     *
     * Description: insert post
     *
     */
    public function addPost () {
        var_dump($_FILES);
        $moveImage = move_uploaded_file($_FILES['image']['tmp_name'], 'public/img/' .$_FILES['image']['name']);
        $image = $this->images->insertImage($_FILES['image']['name'], $_FILES['image']['name'], $_FILES['image']['name']);
        var_dump($image);

        $list = $this->posts->insertPost($_POST['title'], $_POST['content'], $_POST['category']);
        //var_dump($list);

        $list = $this->posts->lastPosts();
        $list = $this->render(compact('list'), 'admin/index', 'admin');
    }

    /**
     * Description: Appel le formulaire d'ajout d'un article
     * On recupere via la BDD la liste des catégory
     *
     *
     * Description: Call form for add posts
     * We recover the BDD the list of categories
     *
     */
    public function postEdit() {
        //var_dump($list);
        $list = $this->posts->findPost($_GET['id']);
        $list = $this->render(compact('list'), 'admin/updatePost', 'admin');
    }

    /**
     * Description: modification du post
     *
     *
     * Description: update post
     *
     */
    public function updatePost(){
        $post = $this->posts->updatePost($_GET['id'],$_POST['title'], $_POST['content']);

        // On charge les données de la table Posts
        $list = $this->posts->lastPosts();
        $list = $this->render(compact('list', 'post'), 'admin/index', 'admin');
    }

    public function delete () {
        $post = $this->posts->delete($_GET['id']);
        $list = $this->posts->lastPosts();
        $list = $this->render(compact('list'), 'admin/index', 'admin');
    }


    
}
