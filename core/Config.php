<?php



namespace core;

/**
 * Description of Config
 *
 * @author Eddy
 */
class Config {
    
    private $settings = [];
    private static $_instance;


    public static function getInstance($file)
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new Config($file);
        }
        return self::$_instance;
    }
}
