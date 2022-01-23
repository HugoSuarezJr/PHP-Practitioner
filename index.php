<?php


class Task {
    
    public $description;

    public $completed = false;

    public function __construct($description, $completed){
        $this->description = $description;
        $this->completed = $completed;

    }
    
    public function isComplete(){
        return $this->completed;
    }

    public function complete(){
        $this->completed = true;
    }    

}


$tasks = [
    new Task('Go to the store', false),
    new Task('Finish my screencast', false),
    new Task('Clean my room', true)
];



require 'index.view.php';
?>