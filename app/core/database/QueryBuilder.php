<?php


class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function fetchAll($table, $intoModel)
    {

        require "app/model/Task.php";
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $intoModel);
    }

    public function insertInto($table, $parameters)
    {


        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            implode(', ', array_map(function ($parameters) {
                return ":$parameters";
            }, array_keys($parameters)))
        );

        $statement = $this->pdo->prepare($sql);
        $statement->execute($parameters);


    }


}
