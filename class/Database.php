<?php

class Database
{
    private static $connection;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        global $dsn, $dbName, $dbUser, $dbPass;

        require('config/db.config.php');

        if (!isset(self::$connection)) {
            $dsn = 'mysql:host=localhost;dbname=ChapterOne';
            self::$connection = new PDO($dsn, $dbUser, $dbPass);
        }
        return self::$connection;
    }
}