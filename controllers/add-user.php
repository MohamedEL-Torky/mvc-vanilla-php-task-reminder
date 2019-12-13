<?php

$parameters = [
    'name' => $_POST["name"],
];

$app["database"]->insertInto('users', $parameters);

echo "New user name added successfully";

header('Location: /');