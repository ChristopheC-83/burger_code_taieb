<?php

class Database
{

    // on crée des variables pour des modif plus faciles

    private static $dbhost = "localhost";
    private static $dbname = "burger_code";
    private static $dbUser = "root";
    private static $dbUserPassword = "";

    private static $connection = null;

    public static function connect()
    {

        try {
            self::$connection = new PDO("mysql:host=".self::$dbhost.";dbname=".self::$dbname, self::$dbUser, self::$dbUserPassword);
        } catch (Exception $e) {
            die('un pb de connexion !?! ' . $e->getMessage());
        }
        return self::$connection;
    }

    public static function disconnect()
    {
        self::$connection = null;
    }
}

Database::connect();