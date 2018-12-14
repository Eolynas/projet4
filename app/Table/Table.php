<?php

namespace App\Table;

use Core\Database\Mysqldatabase;
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
    protected $db_config;
    
    public function __construct($db) {
        $this->db = $db;
    }
    
    protected function getPDO() {
        
    }


}
