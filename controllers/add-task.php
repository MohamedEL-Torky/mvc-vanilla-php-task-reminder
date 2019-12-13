<?php

$app["database"]->insertInto('todo',$_POST["task"]);

echo "New Task created successfully";

header('Location: /');