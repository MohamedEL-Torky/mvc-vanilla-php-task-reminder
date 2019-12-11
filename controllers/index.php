<?php

require "core/model/task.php";


$tasks = $app["database"]->fetchAll('todos', "task");

require "views/index.view.php";