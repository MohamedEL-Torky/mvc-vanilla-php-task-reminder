<?php

namespace App\Core;

class App
{
    protected static $registry = [];

    public static function bind($key, $value){
        static::$registry[$key] = $value;
    }

    public static function resolve($key){
        if(array_key_exists($key, static::$registry)){

            return static::$registry[$key];
        }
        else{
            throw new Exception("No $key is bound in the container!");
        }
    }

    public static function unBind($key){
        if(array_key_exists($key, static::$registry)){
            unset(static::$registry[$key]);
        }
    }

}