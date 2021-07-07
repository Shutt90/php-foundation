<?php

class Task {

    public $description;

    public $completed = false; //protected from global scope / outside world

    public function __construct($description)

    {

        $this-> description = $description;// Automatically triggered on instantiation

    }

    public function complete() 

    {

        $this->completed = true;

    }

    public function isComplete()

    {

          return $this->completed;

    }

    public function description()


    {

        return $this-> description;

    }

}

$tasks = [

    new Task("Go to the store"), //new task object

    new Task("Finish my screencast"),

    new Task("Clean my room")
];

$tasks[0] -> complete();

require "index.view.php";