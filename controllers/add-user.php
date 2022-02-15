<?php

// Jeff's way used for multiple parameters
// $app['database']->insert('users', [
//     'name' => $_POST['name']
// ]);

// My way
$app['database']->insert('users', $_POST['name']);


header('Location: /');
