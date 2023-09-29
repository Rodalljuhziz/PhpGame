<?php

class dbConnector
{
    private static $instance = null;

    private function __construct()
    {
        $dbName = "SquaresGame";
        $nameServer = "localhost";
        $userName = "root";
        $password= "helloworld";
        $port = 6603;
        try {
            $connection = new PDO("mysql:host=$nameServer;dnName=$dbName port=$port", $userName, $password);

            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Connection Successfull";
        } catch (PDOException $error)
        {
            echo "Connection Failed : " . $error->getMessage();
        }
    }
    public static function getInstance()
    {
        if(self::$instance == null)
        {
            self::$instance = new dbConnector();
        }
        else
        {
            return self::$instance;
        }
    }
}