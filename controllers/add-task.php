<?php

$parameters = [
    'description' => $_POST["task"],
    'completed' => 0,
];

try {
    App::resolve("database")->insertInto('todo', $parameters);
} catch (Exception $ex) {
    echo $ex->getMessage();
    die();
}

echo "New Task created successfully";

header('Location: /');