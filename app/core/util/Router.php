<?php

namespace App\Core;

use Exception;

class Router
{
    protected static $routes = [
        "GET" => [],
        "POST" => [],
    ];

    public static function GET($uri, $controller)
    {
        static::$routes["GET"][$uri] = $controller;
    }

    public static function POST($uri, $controller)
    {
        static::$routes["POST"][$uri] = $controller;
    }


    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, static::$routes[$requestType])) {

            return $this->callAction(...explode("@", static::$routes[$requestType][$uri]));
        }
        throw new Exception("No Routes defined for this URI");
    }

    protected function callAction($controller, $action)
    {

        $controller = "App\\Controllers\\{$controller}";

        if (!method_exists($controller, $action)) {
            throw new Exception(
                "{$controller} does not respond to the {$action} action."
            );
        }
        return (new $controller)->$action();
    }
}