<?php


class Conntection
{
    public static function make($config)
    {
        try {
            return new PDO(
                $config["connection"] . ";dbname=" . $config["dbname"],
                $config["username"],
                $config["password"],
                $config["options"]
            );
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }
}
