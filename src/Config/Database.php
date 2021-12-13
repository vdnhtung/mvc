<?php

namespace MVC\src\Config;

use PDO;

class Database
{
    private static $bdd = null;

    public function __construct()
    {

    }

    public static function getBdd()
    {
        if (is_null(self::$bdd)) {
            self::$bdd = new PDO("mysql:host=localhost;dbname=mvc", 'root', '');
        }
        return self::$bdd;
    }
}
