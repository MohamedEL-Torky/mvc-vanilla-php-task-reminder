<?php

return [
    "database" => [
        "dbname" => "mytodo",
        "username" => "root",
        "password" => "123456",
        "connection" => "mysql:host=127.0.0.1",
        "options" => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ],
    ]
];
