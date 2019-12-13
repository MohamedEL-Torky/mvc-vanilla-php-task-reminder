<?php

App::bind("config", require "util/config.php");

try {
    App::bind("database", new QueryBuilder(
        Conntection::make(App::resolve("config")["database"])
    ));

} catch (Exception $ex) {
    echo $ex->getMessage();
}

