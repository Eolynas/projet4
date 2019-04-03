<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Table;

/**
 * Description of categoryTable
 *
 * @author Eddy
 */
class CommentTable extends Table {

    protected $table = 'comments';

    public function countComments($postsId) {
        $db = $this->pdo;
        $req = $db->prepare(""
                . "SELECT "
                . "COUNT(*) AS nbComments "
                . "FROM $this->tb_comments "
                . "WHERE $this->tb_comments.id_post = ?");
        $req->execute(array($postsId));
        $comments = $req->fetchAll();
        //var_dump($comments);
        return $comments;
    }

    public function insertComment($postId, $content, $author) {
        $db = $this->pdo;
        /*$req = $db->prepare(""
                . "INSERT INTO $this->tb_comments "
                . "(id_post, content, author) "
                . "VALUES (?, ?, ?)");*/
        $req = $db->prepare("INSERT INTO comments (id_post, content, author, date) VALUES (:id_post, :content, :author, NOW())");
        //$req->execute(array($postId, $content, $author));
        $req->bindValue('id_post', $postId, \PDO::PARAM_STR);
        $req->bindValue('content', $content, \PDO::PARAM_STR);
        $req->bindValue('author', $author, \PDO::PARAM_STR);
        $req->execute();
        //var_dump($req);
        return $req;
    }

    public function lastComments() {
        $db = $this->pdo;
        $req = $db->query(""
                . "SELECT "
                . "* "
                . "FROM $this->tb_comments "
                . "ORDER BY $this->tb_comments.id_post DESC");
        //var_dump($req);
        $res = $req->fetchAll();
        //var_dump($res);

        return $res;
    }

    public function getComment($id) {
        $db = $this->pdo;
        $req = $db->prepare(""
                . "SELECT * "
                . "FROM $this->tb_comments "
                . "WHERE $this->tb_comments.id = ? ");
        //var_dump($req);
        $req->execute(array($id));
        $comments = $req->fetch();
        //var_dump($comments);
        return $comments;
    }
    
    public function updateComment($content, $id){
        $db = $this->pdo;
        $req = $db->prepare(""
                . "UPDATE $this->tb_comments "
                . "SET content= ?, "
                . "comment_signal=0 "
                . "WHERE $this->tb_comments.id = ?");
        //var_dump($req);
        $req->execute(array($content, $id));
        //var_dump($req);
        return $req;
    }
    
    public function signal($id){
        $db = $this->pdo;
        $req = $db->prepare(""
                . "UPDATE $this->tb_comments "
                . "SET comment_signal=1 "
                . "WHERE $this->tb_comments.id = ?");
        //var_dump($req);
        $req->execute(array($id));
        //var_dump($req);
        return $req;
    }

}
