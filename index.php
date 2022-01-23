<?php

class Task {
    protected $description;
    protected $completed = false ;
    public function __construct($description){
        $this->description = $description;
    }

}

$newTask = new Task('Go to the gym');

var_dump($newTask);


require 'index.view.php';


?>