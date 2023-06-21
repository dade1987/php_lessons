<?php

use Dotenv\Dotenv;
use Dadeit1987\EserciziPhp\Services\Router;
use Dadeit1987\EserciziPhp\Controllers\Test;

define('BASE_DIR', __DIR__);

require BASE_DIR.'/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

//var_dump($url, $_REQUEST);

//$man=new Man('Example', 'Example', 20);
//$man->render();

//Router::get('/men', Man::class, 'index');

Router::get('/test/{test}', Test::class, 'show');


//require BASE_DIR . '/src/Controllers/404.php';
