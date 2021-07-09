<?php 

    function dd($value) {
        die(var_dump($value));
    }

    function fetchAllTasks($pdo) {

        $statement = $pdo->prepare('select * from todos');

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

    }