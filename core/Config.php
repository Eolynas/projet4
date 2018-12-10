<?php
namespace Core;


/**
 * Description of Config
 *
 * @author Eddy
 */
class Config
{

    public $settings = [];
    private static $_instance;

    
    public static function getInstance($file)
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new Config($file);
        }
        return self::$_instance;
    }

    public function __construct($file)
    {
        $this->settings = require($file);
    }
    public function getSetting(){
        return $this->settings;
    }
    
    public function get($key){
        if($this->settings == null){
            return null;
        }
        return $this->settings[$key];
        
    }
  
}
