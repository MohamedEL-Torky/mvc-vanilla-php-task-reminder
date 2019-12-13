<?php

$parameters = [
    'description' => $_POST["task"],
    'completed' => 0,
];

$app["database"]->insertInto('todo', $parameters);

echo "New Task created successfully";

header('Location: /');