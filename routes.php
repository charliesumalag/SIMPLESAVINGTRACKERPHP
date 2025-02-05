<?php


$router->get('/', 'UserController@login');
$router->get('/register', 'UserController@register');
$router->get('/admindashboard', 'DashboardController@admin');
$router->get('/memberdashboard', 'DashboardController@member');
$router->post('/auth/login', 'UserController@authenticate');
$router->post('/auth/register', 'UserController@store');
$router->post('/auth/logout', 'UserController@logout');
$router->get('/adminaccount', 'DashboardController@adminaccount');
$router->get('/adminsavings', 'DashboardController@adminsavings');
$router->get('/adminloans', 'DashboardController@adminloans');
