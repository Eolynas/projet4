<?php

namespace App\Controller;

use Core\Controller\Controller;

class PostsController extends AppController
{


    public function __construct()
    {
        $this->loadPosts();
        //$this->loadCategories();
        $this->loadComments();
        $this->loadUpdate();

    }

    /**
     * Description: $this->posts est un PDO Statment ou on recupere les derniers posts
     * via LastPosts
     *
     */
    public function index()
    {
        // On charge les données de la table Posts
        $list = $this->posts->lastPosts();
        $update = $this->update->lastUpdate();
        $nbComments = $this->comments->countComments(1);
        //var_dump($update);
        if ($list !== null) {
            $list = $this->render(compact('list', 'nbComments', 'update'), 'posts/posts', 'default');
        } else {
            $message = "Les articles n'ont pas pu etre affiché";
            //$notFound = $this->render(compact($message),'posts/404', 'default');
            $notFound = $this->renderNotFound($message, 'posts/404', '404');
        }
        //var_dump($list);

    }

    /**
     * Description: $this->postsCat est un PDO Statment ou on recupere le post passé en paramatre
     *
     */
    public function show()
    {
        $post = $this->posts->findPost($_GET['id']);
        $comments = $this->posts->comment($_GET['id']);
        $nbComments = $this->comments->countComments($_GET['id']);
        //$post = compact('post');
        //var_dump($post);
        $post = $this->render(compact('post', 'comments', 'nbComments'), 'posts/show', 'show');

    }

    public function addComments()
    {
        $comments = $this->comments->insertComment($_GET['id'], $_POST['content'], $_POST['author']);
        $post = $this->posts->findPost($_GET['id']);
        $comments = $this->posts->comment($_GET['id']);
        $nbComments = $this->comments->countComments($_GET['id']);
        //$post = compact('post');
        $post = $this->render(compact('post', 'comments', 'nbComments'), 'posts/show', 'show');
    }

}