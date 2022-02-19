<?php


$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->post('tasks', 'TasksController@storeTask');
$router->post('users', 'UsersController@store');
$router->get('users', 'UsersController@index');
$router->get('tasks', 'TasksController@taskIndex');

