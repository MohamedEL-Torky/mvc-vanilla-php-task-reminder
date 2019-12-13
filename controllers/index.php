<?php

require "core/model/Task.php";


try {
    $tasks = App::resolve("database")->fetchAll('todo', "task");
} catch (Exception $ex) {
    echo $ex->getMessage();
    die();
}

require "views/index.view.php";