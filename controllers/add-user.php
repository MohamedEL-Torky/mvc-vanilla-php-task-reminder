<?php

$parameters = [
    'name' => $_POST["name"],
];

try {
    App::resolve("database")->insertInto('users', $parameters);
} catch (Exception $ex) {
    echo $ex->getMessage();
    die();
}

echo "New user name added successfully";

header('Location: /');