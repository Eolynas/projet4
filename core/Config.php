<?php

namespace Core;

/**
 * Description of Config
 *
 * @author Eddy
 */
class Config
{

    private $settings = [];
    private static $_instance;
    

    
    public static function hello(){
        echo 'Hello de la config';
    }
}
