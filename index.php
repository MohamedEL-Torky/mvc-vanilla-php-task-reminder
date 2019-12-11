<?php
require "core/Router.php";

require "core/bootstrap.php";


$uri = trim($_SERVER["REQUEST_URI"], "/");

require Router::load("core/util/routes.php")
    ->direct($uri);
