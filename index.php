<?php

require "functions.php";

    $names = [

        "Jeff",
        "John",
        "Mary"

    ];

    
    $animals = [

        "Girrafe",
        "Zebra",
        "Elephant"

    ];

    $person = [

        "age" => 31,
        "hair" => "brown",
        "job" => "developer"

    ];

    $person["name"] = "jeffrey";
    $person[] = "elephant";
    unset($person["name"]); //removes the item from the object

    $task = []; //title, due, assigned_to, completed

    $task = [
        "title" => "Mr",
        "due" => "Today",
        "assigned_to" => "Liam",
        "completed" => true
    ];

    // die(var_dump($task));

    echo "<pre>";

    // die(var_dump($person)); //Show full array in browser and nothing else after this line!

    echo "</pre>";

    // dd($animals);

    canDrink(14); //seeks the variable in assosiative arrays too

    require "index.view.php";