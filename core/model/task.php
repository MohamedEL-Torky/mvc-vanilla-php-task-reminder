<?php

class Task {
    protected $description;
    protected $completed;

    public function isCompleted(){
        return $this->completed;
    }

    public function complete(){
        $this->completed = ! $this->completed;
    }

    public function getDescription(){
        return $this->description;
    }

}

