<?php

$description = $_POST['description'];
$completed = $_POST['completed'];


$app['database']->newTask('todos', $description, $completed);

$tasks = $app['database']->selectAll('todos');





require 'views/new-task.view.php';
