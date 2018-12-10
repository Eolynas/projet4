<?php

use core\Config;
use Core\Database\Mysqldatabase;
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
        $config = \Core\Config::getInstance('config/configDb.php');
        if($this->db_instance === NULL){
            $this->db_instance = new MysqlDatabase($config->get('db_name'), $config->get('db_user'), $config->get('db_pass'), $config->get('db_host'));
        }
        return $this->db_instance;
    }
    
        
    
}
