<?php

namespace App\Table;


/**
 * Description: requete SQL pour afficher tout les posts sur la page d'accueil
 *
 * @author Eddy
 */
class PostTable extends Table{
    protected $table = 'posts';
    

    /**
     * Récupère les derniers articles
     * @return array
     */
    public function lastPosts(){
        $db = $this->pdo;
        $req = $db->query(""
                . "SELECT "
                . "$this->tb_posts.id, "
                . "$this->tb_posts.title,"
                . "$this->tb_posts.id_author,"
                . "$this->tb_posts.content,"
                . "DATE_FORMAT(date, '%d/%m/%Y ') AS date, "
                . "$this->tb_posts.id_category,"
                . "$this->tb_posts.id_img,"
                . "$this->tb_images.url,"
                . "$this->tb_images.alt,"
                . "CONCAT($this->tb_users.name, ' ', $this->tb_users.surname) AS author, "
                . "COUNT(CASE WHEN comments.id_post=posts.id THEN comments.id END ) AS nbComments "
                . "FROM $this->tb_posts "
                . "LEFT JOIN $this->tb_images "
                    . "ON $this->tb_posts.id_img = $this->tb_images.id "
                . "LEFT JOIN $this->tb_users "
                    . "ON $this->tb_posts.id_author = $this->tb_users.id "
                . "LEFT JOIN $this->tb_categories "
                    . "ON $this->tb_posts.id_category = $this->tb_categories.id "
                . "LEFT JOIN $this->tb_comments "
                    . "ON $this->tb_comments.id_post = $this->tb_posts.id "
                . "GROUP BY $this->tb_posts.id "
                . "ORDER BY $this->tb_posts.date DESC");
        //var_dump($req);
        $res = $req->fetchAll();
        //var_dump($res);
        
        return $res;
    }
    
    
    
    
    public function findPost($postsId) {
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
    
    
    
    
    
    public function insertPost($title, $content, $category){
        $db = $this->pdo;
        var_dump("INSERT INTO $this->tb_posts "
                . "(title, "
                . "content, "
                . "date, "
                . "id_category) "
                . "VALUES ("
                . "'$title', "
                . "'$content', "
                . "NOW(), "
                . "'$category') ");
        $req = $db->query("INSERT INTO $this->tb_posts "
                . "(title, "
                . "content, "
                . "date, "
                . "id_category) "
                . "VALUES ("
                . "'$title', "
                . "'$content', "
                . "NOW(), "
                . "'$category') ");
        var_dump($req);
        
        return $req;
    }

}

