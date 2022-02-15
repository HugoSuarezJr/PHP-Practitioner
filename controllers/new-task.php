<?php

$newDescription = $_POST['description'];
$newTaskCompleted = $_POST['completed'];


if($newTaskCompleted === 'true'){
    $newTaskCompleted = true;
} else {
    $newTaskCompleted = false;
};


$app['database']->newTask('todos', $newDescription, $newTaskCompleted);



require 'views/new-task.view.php';
