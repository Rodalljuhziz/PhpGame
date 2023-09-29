<?php

namespace ProjetGames;

use PDO;
class dbConnector extends PDO
{
    private string $dbName = "SquaresGame";
    private string $nameServer = "127.0.0.1";
    private string $port = "6603";
    private static dbConnector $instance;

    public function __construct()
    {

            parent::__construct("mysql:host={$this->nameServer};port={$this->port};dbname={$this->dbName}",
            'root',
            'helloworld');
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) self::$instance = new dbConnector();
            return self::$instance;
    }
}