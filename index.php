<?php

use ProjetGames\dbConnector;

require("src/dbConnector.php");
require("PlayerDao.php");

$bdd = dbConnector::getInstance();
$player = new PlayerDao();
$player->findplayers($bdd);
$player->createPlayer($bdd);

var_dump($bdd);

