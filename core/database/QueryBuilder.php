<?php


class QueryBuilder
{
    protected $pdo;

    public function __construct( $pdo)
    {
        $this->pdo = $pdo;
    }

    public function fetchAll($table, $intoModel)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $intoModel);
    }

    public function insertInto($table, $task){
        $statement = $this->pdo->prepare("INSERT INTO $table (id, description, completed) VALUES (NULL, \"$task\", 0);");
        $statement->execute();
    }
}
