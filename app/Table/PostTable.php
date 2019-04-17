<?php

namespace App\Table;


use Doctrine\ORM\Query\Expr\From;

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
        $req = $db->query('  SELECT posts.id AS idPost, posts.title, posts.id_author, posts.id_category, posts.id_img, posts.date AS date, posts.content,
                                             images.up_title, images.up_name, images.up_date, images.up_alt, images.id,
                                             COUNT(CASE WHEN comments.id_post=posts.id THEN comments.id END ) AS nbComments,
                                             CONCAT(users.name, \' \', users.surname) AS author
                                            
                                        FROM posts 
                                        JOIN images ON images.id = posts.id_img
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
        $postSec = $postsId;
        //var_dump($titleSec);
        if($postSec > 0){
            $req = $db->prepare ("SELECT posts.id AS idPost, posts.id_img, posts.id_category, posts.id_author, posts.content, posts.date, posts.title,
                                                images.*, 
                                                CONCAT(users.name, '', users.surname) AS author
                                            FROM posts
                                            JOIN images ON posts.id_img = images.id
                                            LEFT JOIN users ON posts.id_author = users.id
                                            LEFT JOIN categories ON posts.id_category = categories.id
                                            WHERE posts.id = :id");
            $req->bindValue('id', $postSec);
            //var_dump($req);
            $req->execute();
            $post = $req->fetch();
            return $post;
        } else {
            //var_dump('erreur');
            return 'error';
        }
    }


    public function insertPost($title, $content, $category, $image)
    {
        $db = $this->pdo;
        $titleSec = $title;
        $contentSec = $content;
        $caterogySec = (int) $category;
        $imageSec = (int) $image;
        //$idImageSec = 1;
        $req = $db->prepare(" INSERT INTO posts (posts.title, posts.id_author, posts.content, posts.id_category, posts.date, posts.id_img) 
                                            VALUE (:title, :author, :content, :category, NOW(), :img)");
        $req->bindValue('title', $titleSec);
        $req->bindValue('author', 1);
        $req->bindValue('content', $contentSec);
        $req->bindValue('category', $caterogySec);
        $req->bindValue('img', $imageSec);
        $req->execute();
        var_dump($req);
        return $req;
    }

    public function updatePost($id, $title, $content)
    {
        $db = $this->pdo;
        $titleSec = $title;
        $contentSec = $content;
        $idSec = (int) $id;
        $req = $db->prepare("UPDATE posts SET posts.title = ?, posts.content = ? WHERE posts.id=?");
        //var_dump($req);
        $req->execute(array($titleSec, $contentSec, $idSec));
        //var_dump($req);
        return $req;
    }

    public function comment($postsId)
    {
        $db = $this->pdo;

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