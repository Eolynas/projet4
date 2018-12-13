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
    
    
}
