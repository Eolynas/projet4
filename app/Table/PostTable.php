<?php

namespace App\Table;

use Core\Database;

/**
 * Description of PostsTable
 *
 * @author Eddy
 */
class PostTable extends Table{
    
    //Nom de la table pour les posts
    protected $table = 'posts';


    public function lastPosts(){
        $db = new \PDO('mysql:host=localhost;dbname=projet4;charset=utf8', 'root', '');
        $req = $db->query('SELECT * FROM ' . $this->table);
        
        return $req;
    }
    
}
