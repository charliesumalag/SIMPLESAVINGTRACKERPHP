<?php
require __DIR__ . '/../vendor/autoload.php';
require '../helpers.php';
require basePath('framework/Router.php');

use framework\Router;

$router = new Router();
$routes = require basePath('routes.php');



$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];


$router->route($uri, $method);
