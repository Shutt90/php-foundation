<?php

class Contractor

{

    protected $electrician;

    protected $plumber;

    public function __construct($electrician, $plumber, $designer)

    {

        $this->electrician = $electrician;

        $this->plumber = $plumber;

    }

    public function performWork()

    {

        //$electrician
        //$plumber
        //$designer
    }
}