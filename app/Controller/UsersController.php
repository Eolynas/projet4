<?php
/**
 * Created by PhpStorm.
 * User: eddyh
 * Date: 03/04/2019
 * Time: 15:50
 */

namespace App\Controller;


class UsersController extends AppController
{

    public function __construct(){
        $this->loadUsers();
        $this->loadPosts();
        $this->loadComments();
        $this->loadUpdate();
    }

    public function register(){
        $user = $this->users->inserUser();
        // On charge les données de la table Posts
        $list = $this->posts->lastPosts();
        //var_dump($list['id']);
        $nbComments = $this->comments->countComments(1);
        //var_dump($nbComments);

        $user = $this->render(compact('user', 'list', 'nbComments'),'admin/index', 'admin');
        //$list = $this->render(compact('list'), 'admin/index', 'admin');

    }

    public function login() {
        $user = $this->users->loginUser($_POST['login'], $_POST['password']);
        // On charge les données de la table Posts
        $list = $this->posts->lastPosts();
        $update = $this->update->lastUpdate();
        //var_dump($list['id']);
        $nbComments = $this->comments->countComments(1);
        //var_dump($nbComments);

        $user = $this->render(compact( 'users','list', 'nbComments', 'update'),'posts/posts', 'default');
    }

    public function deconnexion() {
        session_destroy();
        header('Location: index.php');

    }


}