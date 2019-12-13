<?php
$app = [];
$app["config"] = require "util/config.php";



$app["database"] = new QueryBuilder(
    Conntection::make($app["config"]["database"])
);

