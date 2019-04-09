<?php
/**
 * Created by PhpStorm.
 * User: eddyh
 * Date: 09/04/2019
 * Time: 10:00
 */

namespace App\Controller\Admin;


class UpdateController extends AppController
{
    public function __construct(){
        $this->loadUpdate();
    }

    public function index () {
        // On charge les données des futurs amélioration
        $list = $this->update->lastUpdate();
        //var_dump($list);
        $list = $this->render(compact('list'), 'admin/update', 'admin');

    }

    public function formUpdate()
    {
        $list = $this->render(compact('list'), 'admin/formUpdate', 'admin');
    }

    public function insertUpdate(){
        $list = $this->update->insertUpdate($_POST['title'], $_POST['dateUpdate'], $_POST['content'], $_POST['progress']);
        $list = $this->update->lastUpdate();
        //var_dump($list);
        $list = $this->render(compact('list'), 'admin/update', 'admin');
    }

    public function edit(){
        $update = $this->update->getUpdate($_GET['id']);
        //var_dump($list);
        $list = $this->render(compact('update'), 'admin/editUpdate', 'admin');

    }
    public function update(){
        $update = $this->update->editUpdate($_POST['title'], $_POST['content'], $_POST['dateUpdate'],
                                            $_POST['progress'], $_GET['id']);
        $list = $this->update->lastUpdate();
        //var_dump($list);
        $list = $this->render(compact('list'), 'admin/update', 'admin');

    }

    public function delete()
    {
        $delete = $this->update->delete($_GET['id']);
        $list = $this->update->lastUpdate();
        //var_dump($list);
        $comments = $this->render(compact('list'), 'admin/update', 'admin');

    }
}