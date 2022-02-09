<?php

class QueryBuilder {

    protected $pdo;

    public function __construct($pdo){

        $this->pdo=$pdo;
    }

    public function selectAll($table){

        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);  
    }

    public function newTask($table, $description, $completed){

        $statement = $this->pdo->prepare("insert into {$table}(description,completed) values('$description', {$completed})");

        $statement->execute();
    }

}