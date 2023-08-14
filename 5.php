<?php
abstract class Vehicle {
    private $name = 'bike';

    public function fun()
    {
        $obj = new Vehicle;
        echo "It's a bike";
    }

}

$obj = new Vehicle;
$obj->fun();