<?php

use Dotenv\Dotenv;
use Dadeit1987\EserciziPhp\Main;

define('BASE_DIR', __DIR__);

require BASE_DIR.'/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

Main::start();
