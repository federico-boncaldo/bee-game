<?php

require 'vendor/autoload.php';

use beetest\Game;

$method = $_SERVER['REQUEST_METHOD'];

session_start();

if($method == "GET") {
    $_SESSION["bees"] = Game::createBees();
}

if($method == "POST") {
    $_SESSION["bees"] = Game::hit($_SESSION["bees"]);
}

$bees = $_SESSION["bees"];

require 'index.html';