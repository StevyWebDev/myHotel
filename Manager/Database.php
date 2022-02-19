<?php

namespace Manager;

class Database {

    public static function pdo() {
        $pdo = new \PDO(
            'mysql:host=localhost;port=3306;dbname=myHotel', 
            'root', 
            '', 
            [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
            ]
        );
        return $pdo;
    }
}