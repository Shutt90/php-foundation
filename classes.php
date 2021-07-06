<?php

require "functions.php";


class Task {

    protected $description;

    protected $completed = false; //protected from global scope / outside world

    public function __construct($description)

    {

        $this-> description = $description;// Automatically triggered on instantiation

    }

    public function isComplete()

    {

          return $this->completed;

    }

}

$task = new Task("Go to the store");

$task->isComplete();

require "index.view.php";