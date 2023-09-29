<?php
class PlayerDao{
    function findPlayers($pdo)
        {
            $query = $pdo->prepare("SELECT * FROM Game");
            $query->execute();
            $test = $query->fecthAll();
            print_r($test);
        }
    function createPlayer($pdo)
    {
        $query = $pdo->prepare("INSERT INTO Players (login, Password, Email, birthDate) VALUES ('toto', 'titi', 'toto@gmail.com', '1993.02.05')");
        $query->execute();
        $addPlayer = $query->fetchAll();
        print_r($addPlayer);
    }
}