<?php

namespace App\Table;


/**
 * Description of PostsTable
 *
 * @author Eddy
 */
class PostTable extends Table{
    
    //Nom de la table pour les posts
    protected $table = 'posts';
    protected $image = 'images';


    public function lastPosts(){
        $db = new \PDO('mysql:host=localhost;dbname=projet4;charset=utf8', 'root', '');
        $req = $db->query('SELECT * FROM ' . $this->table . ' LEFT JOIN ' . $this->image . ' ON posts.id_img = images.id');
        
        return $req;
    }
    
}
