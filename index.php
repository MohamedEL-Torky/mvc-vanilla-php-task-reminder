<?php
require "vendor/autoload.php";
require "core/bootstrap.php";



require Router::load("core/util/routes.php")->direct(Request::uri(), Request::method());
