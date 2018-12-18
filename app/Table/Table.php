<?php

namespace App\Table;

use App;
/**
 * Description: parent qui sert à stocker les informations comme le nom des tables de la bdd 
 * et la connexion à la BDD
 * @author Eddy
 */
class Table {
    
    //Nom des tables de la bdd
    protected $tb_posts = 'posts';
    protected $tb_images = 'images';
    protected $tb_users = 'users';
    protected $tb_categories = 'categories';
    protected $tb_comments = 'comments';
    protected $table;
    protected $db;
    protected $pdo;


    public function __construct($db) {
        $this->db = $db;
        $this->pdo = new \PDO('mysql:host='.$this->db->get('db_host').';dbname='.$this->db->get('db_name').';charset=utf8', $this->db->get('db_user'), $this->db->get('db_pass'));
    }
    
    public function delete($id){
        $db = $this->pdo;
        $req = $db->query("DELETE FROM $this->table WHERE id=$id");
        var_dump($req);
        
        return $req;
    }
    
    

}
