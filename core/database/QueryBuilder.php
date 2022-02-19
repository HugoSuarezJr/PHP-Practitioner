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

    public function insertNewTask($table, $description, $completed){
        $statement = $this->pdo->prepare("insert into {$table}(description,completed) values('$description', $completed)");

        $statement->execute();
    }

    // Jeff's way used for multiple paramaters  
    // public function insert($table, $parameters){
    //     $sql = sprintf(
    //         'insert into %s (%s) values (%s)',
    //         $table, 
    //         implode(', ', array_keys($parameters)),
    //         ':' . implode(', :', array_keys($parameters))
    //     );
    //     try {
    //         $statement = $this->pdo->prepare($sql);
    //         $statement->execute($parameters);
    //     } catch (Exception $e) {
    //         die('Whoops, something went wrong.');
    //     }
   
    // }

    // My way
    public function insert($table, $name){

        try{
        $statement = $this->pdo->prepare("insert into {$table}(name) values('$name')");

        $statement->execute();
        } catch (Exception $e) {
            die('Whoops, something went wrong.');
        }
    }
}

