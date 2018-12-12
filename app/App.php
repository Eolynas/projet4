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
    private  $db_instance;
    private static $_instance;

    public static function getInstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new App();
        }
        return self::$_instance;
    }
    
    
    public static function load(){
        session_start();
        require '/app/Autoloader.php';
        App\Autoloader::register();
        require '/core/Autoloader.php';
        Core\Autoloader::register();
        
    }
    
   
    
    public function getDb(){
        $config = Config::getInstance(ROOT . '/config/config.php');
        if(is_null($this->db_instance)){
            $this->db_instance = new MysqlDatabase($config->get('db_name'), $config->get('db_user'), $config->get('db_pass'), $config->get('db_host'));
        }
        return $this->db_instance;
    }
    
        
    
}
