<?php


$router->get('/', 'UserController@login');
$router->get('/register', 'UserController@register');
$router->get('/admindashboard', 'AdminDashboardController@index');
$router->post('/auth/login', 'UserController@authenticate');
$router->post('/auth/register', 'UserController@store');
// $router->get('/register', 'app/controllers/register.php');
// $router->get('/admindashboard', 'app/controllers/admindashboard.php');
// $router->post('/', 'app/controllers/login.php');
