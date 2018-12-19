<?php


namespace App\Table;

/**
 * Description of categoryTable
 *
 * @author Eddy
 */
class CategoryTable extends Table{

    public function getListCategory(){
        $db = $this->pdo;
        $req = $db->query("SELECT "
                . "$this->tb_categories.id,"
                . "$this->tb_categories.name "
                . "FROM $this->tb_categories "
                . "ORDER BY id ");
        $res = $req->fetchAll();
        return $res;
    }
    
    
}
