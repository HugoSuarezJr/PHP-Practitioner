<?php


$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('about/culture', 'controllers/about-culture.php');
$router->post('new/task', 'controllers/new-task.php');
$router->post('users', 'controllers/add-user.php');

