<?php

function dumper($data){
    echo '<pre>';
    var_dump($data);
        echo '</pre>';
    }

function bouncer($age){
    if($age >= 21){
        echo "<h1>ID says you're $age. Welcome to the party &#128526</h1>";
    } else {
        echo "<h1>Sorry bud ID says you're only $age, maybe next time &#129335</h1>";
    }
}

function connectToDb(){
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '440724Ef!');
    } catch (PDOException $e){
        die($e->getMessage());
    }
}

function fetchAllTasks($pdo){
    $statement = $pdo->prepare('select * from todos');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');    
}


