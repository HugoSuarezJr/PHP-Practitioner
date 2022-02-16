<?php

class PagesController {
    public function home(){
        // Receive the request.
        // Delegate.
        // Return a response.
        $users = App::get('database')->selectAll('users');

        return view('index', compact('users'));
        // return view('index', ['users' => $users]);
    }
    public function about(){
        $company = 'SHI';
    
        return view('about', compact('company'));
    }
    public function newTask(){
        $description = $_POST['description'];
        $completed = $_POST['completed'];

        App::get('database')->newTask('todos', $description, $completed);

        $tasks = App::get('database')->selectAll('todos');


        return view('new-task', compact('tasks', 'description'));
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
        return view('contact');
    }
}