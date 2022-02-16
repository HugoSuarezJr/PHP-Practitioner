<?php

class PagesController {
    public function home(){
        // Receive the request.
        // Delegate.
        // Return a response.
        $users = App::get('database')->selectAll('users');

        require 'views/index.view.php';
    }
    public function about(){
        require 'views/about.view.php';
    }
    public function newTask(){
        $description = $_POST['description'];
        $completed = $_POST['completed'];

        App::get('database')->newTask('todos', $description, $completed);

        $tasks = App::get('database')->selectAll('todos');

        require 'views/new-task.view.php';
    }
    public function newUser(){
        // Jeff's way used for multiple parameters
        // $app['database']->insert('users', [
        //     'name' => $_POST['name']
        // ]);

        // My way
        App::get('database')->insert('users', $_POST['name']);

        header('Location: /');
    }
    public function contact(){
        $contact = "YEP THATS ME";
        require 'views/contact.view.php';
    }
}