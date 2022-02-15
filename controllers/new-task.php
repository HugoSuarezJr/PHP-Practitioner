<?php

$description = $_POST['description'];
$completed = $_POST['completed'];


$app['database']->newTask('todos', $description, $completed);



require 'views/new-task.view.php';
