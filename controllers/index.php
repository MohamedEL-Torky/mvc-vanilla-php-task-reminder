<?php

require "core/model/task.php";


$tasks = $app["database"]->fetchAll('todo', "task");

require "views/index.view.php";