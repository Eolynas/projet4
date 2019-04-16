<?php
/**
 * Created by PhpStorm.
 * User: eddyh
 * Date: 10/04/2019
 * Time: 08:39
 */

namespace App\Table;


class ImagesTable extends Table
{
    protected $table = 'images';

    public function lastImages()
    {
        $db = $this->pdo;
        $req = $db->query("SELECT * FROM images");
        //var_dump($req);
        $res = $req->fetchAll();
        //var_dump($res);

        return $res;
    }

    public function insertImage($name, $alt, $title)
    {
        $db = $this->pdo;
        $req = $db->prepare('INSERT INTO images (up_name, up_alt, up_title, up_date) VALUE (:up_name, :up_alt, :up_title, NOW())');
        $req->bindValue('up_name', $name, \PDO::PARAM_STR);
        $req->bindValue('up_alt', $alt, \PDO::PARAM_STR);
        $req->bindValue('up_title', $title, \PDO::PARAM_STR);
        $req->execute();
        //var_dump($req);
        //var_dump($this->pdo->lastInsertId());
        return $this->pdo->lastinsertid();
        //return $req;
    }

    public function editImages()
    {

    }

}