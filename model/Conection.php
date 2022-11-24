<?php

class Conection
{
    private static $instance = NULL;
    private static $path = "mysql:host=localhost;dbname=php_crud";
    private static $user = "root";
    private static $pass = "";

    private function __construct()
    {
        self::$instance = new PDO(self::$path,self::$user, self::$pass);   
    }

    private function __clone()
    {
        
    }

    public static function instance(){
        if (is_null(self::$instance)) {
            new Conection();
        }

        return self::$instance;
    }
}
