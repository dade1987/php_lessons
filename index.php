<?php

use Dotenv\Dotenv;
use Dadeit1987\EserciziPhp\Services\Router;
use Dadeit1987\EserciziPhp\Controllers\Test;

define('BASE_DIR', __DIR__);

define('BASE_VIEWS', BASE_DIR.'/src/Views');

require BASE_DIR.'/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(BASE_DIR);
$dotenv->load();



Router::get('/tests/{test}', Test::class, 'show');

Router::get('/tests', Test::class, 'index');
