<?php

namespace App\Controllers;

use App\Core\App;

class TasksController {

    public function taskIndex(){
        $tasks = App::get('database')->selectAll('todos');
        return view('new-task', compact('tasks', 'addedNewTask','description'));
    }

    public function storeTask(){
        $description = $_POST['description'];
        $completed = $_POST['completed'];

        App::get('database')->insertNewTask('todos', $description, $completed);

        return redirect('tasks');
    }
}