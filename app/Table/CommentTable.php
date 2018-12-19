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
class CommentTable extends Table{
    

    public function countComments ($postsId) {
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
    
    
}
