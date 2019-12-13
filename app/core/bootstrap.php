<?php

use App\Core\App;

App::bind("config", require "util/config.php");

try {
    App::bind("database", new QueryBuilder(
        Conntection::make(App::resolve("config")["database"])
    ));

} catch (Exception $ex) {
    echo $ex->getMessage();
}

function view($name, $data = null){
    extract($data);
    return require "app/views/{$name}.view.php";
}

function redirect($path){
    header("Location: /{$path}");
}

