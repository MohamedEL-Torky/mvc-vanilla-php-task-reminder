<?php

class Router
{
    protected static $routes = [
        "GET" => [],
        "POST" => [],
    ];

    public static function GET($uri, $controller)
    {
        Router::$routes["GET"][$uri] = $controller;
    }

    public static function POST($uri, $controller)
    {
        Router::$routes["POST"][$uri] = $controller;
    }


    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, Router::$routes[$requestType])) {
            return Router::$routes[$requestType][$uri];
        }
        throw new Exception("No Routes defined for this URI");
    }
}