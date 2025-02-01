<?php
require __DIR__ . '/../vendor/autoload.php';

use framework\Router;
use framework\Session;

require '../helpers.php';

Session::start();


$router = new Router();
$routes = require basePath('routes.php');



$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];


$router->route($uri, $method);
