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
$router->get('/addsaving', 'SavingsController@addSaving');

$router->get('/adminloans', 'DashboardController@adminloans');
$router->get('/members', 'MembersController@index');
$router->get('/membersavings', 'DashboardController@membersaving');
$router->get('/memberloan', 'MembersController@memberloan');
$router->get('/memberaccount', 'MembersController@memberaccount');


$router->post('/savingsadd', 'SavingsController@add');
$router->delete('/deletesaving', 'SavingsController@delete');
// $router->get('/editsaving', 'SavingsController@edit');
$router->post('/updatesaving', 'SavingsController@edit');
