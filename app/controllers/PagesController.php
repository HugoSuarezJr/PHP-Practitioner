<?php

// AC/DC => Rock or Bust => Dogs of War

namespace App\Controllers;


class PagesController {
    public function home(){
        // Receive the request.
        // Delegate.
        // Return a response.
        return view('index');
        // return view('index', ['users' => $users]);
    }
    public function about(){
        $company = 'SHI';
    
        return view('about', compact('company'));
    }

    public function newUser(){
        // Jeff's way used for multiple parameters
        // $app['database']->insert('users', [
        //     'name' => $_POST['name']
        // ]);

        // My way
        App::get('database')->insert('users', $_POST['name']);

        return view('');
    }
    public function contact(){
        $contact = "YEP THATS ME";
        return view('contact', compact('contact'));
    }
}