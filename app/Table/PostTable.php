<?php

namespace App\Table;


/**
 * Description: requete SQL pour afficher tout les posts sur la page d'accueil
 *
 * @author Eddy
 */
class PostTable extends Table{
    
    

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
                //. "$this->tb_posts.date,"
                . "DATE_FORMAT(date, '%d/%m/%Y ') AS date, "
                . "$this->tb_posts.id_category,"
                . "$this->tb_posts.id_img,"
                . "$this->tb_images.url,"
                . "$this->tb_images.alt,"
                //. "$this->tb_users.name"
                . "CONCAT($this->tb_users.name, ' ', $this->tb_users.surname) AS author "
                . "FROM $this->tb_posts "
                . "LEFT JOIN $this->tb_images "
                    . "ON $this->tb_posts.id_img = $this->tb_images.id "
                . "LEFT JOIN $this->tb_users "
                    . "ON $this->tb_posts.id_author = $this->tb_users.id "
                . "ORDER BY $this->tb_posts.date DESC");
        
        return $req;
    }

}

