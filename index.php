<?php
require "core/util/Router.php";

require "core/bootstrap.php";

require "core/util/Request.php";


require Router::load("core/util/routes.php")->direct(Request::uri(), Request::method());
