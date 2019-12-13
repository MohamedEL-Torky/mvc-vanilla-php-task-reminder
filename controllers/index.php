<?php

require "core/model/Task.php";


$tasks = $app["database"]->fetchAll('todo', "task");

require "views/index.view.php";