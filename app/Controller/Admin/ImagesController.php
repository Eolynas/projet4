<?php

namespace App\Controller\Admin;

use Core\Controller\Controller;

/**
 * Description of categoriesController
 *
 * @author Eddy
 */
class ImagesController extends AppController{

    private $uploadDir = 'public/img';
    
    public function __construct()
    {
        //$this->loadPosts();
        //$this->loadCategory();
        $this->loadImages();

    }
    
    public function index()
    {
        // Affiche toutes les images avec une dimension spécifier
        $images = $this->images->lastImages();
        //var_dump($comments);
        $images = $this->render(compact('images'), 'admin/images', 'admin');
    }

    public function formImage()
    {

        //var_dump($category);
        $list = $this->render(compact('list'), 'admin/formImage', 'admin');
    }

    public function insertImage()
    {
        $name =  $_POST['title'] . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $moveImage = move_uploaded_file($_FILES['image']['tmp_name'], 'public/img/' .$name);
        $image = $this->images->insertImage($name, $_POST['alt'], $_POST['title']);
        $images = $this->images->lastImages();
        $images = $this->render(compact('images'), 'admin/images', 'admin');
    }
}

