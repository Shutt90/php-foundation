<?php

class QueryBuilder

{

    protected $pdo;

    public function __contstruct(PDO $pdo)

    {

        $this->pdo = $pdo

    }

    public function selectAll($table)

    {

        $statement = $pdo->prepare("select * from todos");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, "Task");

    }

}