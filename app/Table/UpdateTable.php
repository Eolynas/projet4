<?php
/**
 * Created by PhpStorm.
 * User: eddyh
 * Date: 09/04/2019
 * Time: 10:10
 */

namespace App\Table;


class UpdateTable extends Table
{
    protected $table = 'updateBlog';

    public function lastUpdate ()
    {
        $db = $this->pdo;
        $req = $db->query('SELECT * FROM updateBlog ORDER BY updateBlog.progress DESC ' );
        //var_dump($req);
        $res = $req->fetchAll();
        //var_dump($res);
        return $res;
    }

    public function insertUpdate($title, $content, $progress)
    {
        $db = $this->pdo;
        $req = $db->prepare('INSERT INTO updateBlog (updateBlog.title, updateBlog.content, updateblog.progress) VALUE (?, ?, ?)');
        $req->execute(array($title, $content, $progress));
        //var_dump($req);
        return $req;
    }

    public function getUpdate($id)
    {
        $db = $this->pdo;
        $req = $db->prepare('SELECT * FROM updateblog WHERE id= ?');
        $req->execute(array($id));
        $update = $req->fetch();
        //var_dump($req);
        return $update;
    }
    public function editUpdate($title, $content, $progress, $id)
    {
        $db = $this->pdo;
        $req = $db->prepare('UPDATE updateBlog SET title = ?, content = ?, progress = ? WHERE id = ?');
        $req->execute(array($title, $content, $progress, $id));
        //var_dump($req);
        return $req;
    }

}