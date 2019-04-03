<?php

namespace App\Table;


/**
 * Description: requete SQL pour afficher tout les posts sur la page d'accueil
 *
 * @author Eddy
 */
class PostTable extends Table
{
    protected $table = 'posts';


    /**
     * Récupère les derniers articles
     * @return array
     */
    public function lastPosts()
    {
        $db = $this->pdo;
        $req = $db->query('  SELECT posts.id, posts.title, posts.id_author, posts.id_category, posts.id_img, posts.date AS date, posts.content,
                                            COUNT(CASE WHEN comments.id_post=posts.id THEN comments.id END ) AS nbComments,
                                            CONCAT(users.name, \' \', users.surname) AS author
                                        FROM posts 
                                        LEFT JOIN images ON posts.id_img = images.id
                                        LEFT JOIN users ON posts.id_author = users.id
                                        LEFT JOIN categories ON posts.id_category = categories.id
                                        LEFT JOIN comments ON comments.id_post = posts.id
                                        GROUP BY posts.id
                                        ORDER BY posts.date DESC 
                                        ');
        //var_dump($req);
        $res = $req->fetchAll();
        //var_dump($res);
        return $res;
    }

    /**
     * Récupère l'article selectionné
     * @return array
     */
    public function findPost($postsId)
    {
        $db = $this->pdo;
        $req = $db->prepare(""
                            . "SELECT "
                            . "$this->tb_posts.id, "
                            . "$this->tb_posts.title,"
                            . "$this->tb_posts.id_author,"
                            . "$this->tb_posts.content,"
                            . "DATE_FORMAT(date, '%d/%m/%Y ') AS date, "
                            . "$this->tb_posts.id_category, "
                            . "$this->tb_posts.id_img, "
                            . "$this->tb_images.url,"
                            . "$this->tb_images.alt,"
                            . "CONCAT($this->tb_users.name, ' ', $this->tb_users.surname) AS author "
                            . "FROM $this->tb_posts "
                            . "LEFT JOIN $this->tb_images "
                            . "ON $this->tb_posts.id_img = $this->tb_images.id "
                            . "LEFT JOIN $this->tb_users "
                            . "ON $this->tb_posts.id_author = $this->tb_users.id "
                            . "LEFT JOIN $this->tb_categories "
                            . "ON $this->tb_posts.id_category = $this->tb_categories.id "
                            . "WHERE $this->tb_posts.id = ?");
        $req->execute(array($postsId));
        $post = $req->fetch();
        return $post;
    }


    public function insertPost($title, $content, $category)
    {
        $db = $this->pdo;
        /*$req = $db->prepare(""
                            . "INSERT INTO $this->tb_posts "
                            . "(title, content, id_category) "
                            . "VALUES (?, ?, ?)");*/
        $req = $db->prepare(" INSERT INTO posts (posts.title, posts.id_author, posts.content, posts.id_category, posts.date) VALUE (?, 1, ?, ?, NOW())");
        $req->execute(array($title, $content, $category));
        //var_dump($req);
        return $req;
    }

    public function updatePost($id, $title, $content)
    {
        $db = $this->pdo;
        $req = $db->prepare("UPDATE posts SET posts.title = ?, posts.content = ? WHERE posts.id=?");
        //var_dump($req);
        $req->execute(array($title, $content, $id));
        //var_dump($req);
        return $req;
    }

    public function comment($postsId)
    {
        $db = $this->pdo;
        /*$req = $db->prepare(""
                            . "SELECT "
                            . "$this->tb_comments.id, "
                            . "$this->tb_comments.author, "
                            . "$this->tb_comments.content, "
                            . "$this->tb_comments.id_post, "
                            . "DATE_FORMAT(date_comment, '%d/%m/%Y %T') AS date_comment, "
                            . "DATE_FORMAT(date, '%d/%m/%Y ') AS date "
                            . "FROM $this->tb_comments "
                            . "LEFT JOIN $this->tb_posts "
                            . "ON $this->tb_comments.id_post = $this->tb_posts.id "
                            . "WHERE $this->tb_posts.id = ? "
                            . "ORDER BY date_comment DESC");*/
        $req = $db->query("SET lc_time_names = 'fr_FR'");
        $req = $db->prepare("SELECT comments.id, comments.author, comments.content, comments.id_post, DATE_FORMAT(comments.date, 'le %d %M %Y à %T') AS date_comment, comments.signalComment
                                        FROM comments 
                                        LEFT JOIN posts ON comments.id_post = posts.id 
                                        WHERE posts.id = ?
                                        ORDER BY date_comment DESC ");


        $req->execute(array($postsId));
        $comment = $req->fetchAll();
        return $comment;
    }

}