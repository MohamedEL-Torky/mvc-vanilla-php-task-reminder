<?php

namespace App\Controllers;
use App\Core\App;
use http\Exception;

class TaskController
{
    public function index(){
        try {
            $tasks = App::resolve("database")->fetchAll('todo', "Task");
        } catch (Exception $ex) {
            echo $ex->getMessage();
            die();
        }
        view("tasks", compact('tasks'));
    }

    public function store(){
        $parameters = [
            'description' => $_POST["task"],
            'completed' => 0,
        ];

        try {
            App::resolve("database")->insertInto('todo', $parameters);
        } catch (Exception $ex) {
            echo $ex->getMessage();
            die();
        }
        redirect("tasks");
    }
}