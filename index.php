<?php

require("src/dbConnector.php");


$bdd = dbConnector();

var_dump($bdd->getInstance());

