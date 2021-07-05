<?php 

    function dd($value) {
        die(var_dump($value));
    }

    function canDrink ($age) {
        if($age>=18) {
            echo "Don't get too wasted";
        } else {
            echo "Not tonight mate";
        }
    }