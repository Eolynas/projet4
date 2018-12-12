<?php


/**
 * Database connection // Connexion à la base de donnée MySQL
 *
 * @author Eddy
 */

namespace Core\Database;





class MysqlDatabase {
    
    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;
    
    public function __construct($db_name, $db_user, $db_pass, $db_host){
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }
    
    public function dbConnect() {
        $db = new\PDO("mysql:host= $this->db_host; dbname= $this->db_name; $this->db_user; $this->db_pass");
        $this->pdo = $db;
    }
}
