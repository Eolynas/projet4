<?php

use Core\Config;
use Core\Database\MysqlDatabase;

/**
 * Description of App
 *
 * @author Eddy
 */
class App {

    public $title = "Projet 4";
    private $db_config;
    private static $_instance;


    public static function getInstance() {
        if (is_null(self::$_instance)) {
            self::$_instance = new App();
        }
        return self::$_instance;

    }

    /**
     * Chargement des autoloader
     */
    public static function load() {
        session_start();
        require "app/Autoloader.php";
        App\Autoloader::register();
        require "core/Autoloader.php";
        Core\Autoloader::register();
    }

    
    /**
     * Description: instance de la connexion à la BDD
     * return PDO statment
     */
    public function getDb() {
        if ($this->db_config == NULL) {
            $this->db_config = Config::getInstance('config/configDb.php');
            //var_dump($this->db_config['db_name']);
        }
        return $this->db_config;
    }

}
