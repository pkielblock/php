<?php

namespace App\Model;
use PDO;

class Connection
{
    private static PDO $instance;

    public static function getConnection(): PDO
    {
        if (!isset(self::$instance)) {
            self::$instance = new PDO('mysql:host=localhost;dbname=pdo;charset=utf8', 'pedro', 123);
        }
        return self::$instance;
    }
}