<?php
$app = [];
$app["config"] = require "util/config.php";

require "database/Connection.php";
require "database/QueryBuilder.php";


$app["database"] = new QueryBuilder(
    Conntection::make($app["config"]["database"])
);

