<?php

namespace App\Controller\Admin;

use Core\Controller\Controller;

/**
 * Description of categoriesController
 *
 * @author Eddy
 */
class CategoriesController extends AppController {

    public function __construct() {
        $this->loadPosts();
        $this->loadCategory();
    }

    public function index() {
        $category = $this->category->getListCategory();
        $list = $this->render($category, 'admin/categories', 'admin');
    }

}
