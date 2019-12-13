<?php

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
            return static::$routes[$requestType][$uri];
        }
        throw new Exception("No Routes defined for this URI");
    }
}