<?php

class Cars
{
    // Class can be accessed from another class
    public $wheel_count = 4;

    // Class only can be access on that class
    private $door_count = 4;

    // Class only can access on extends class (inheritance)
    protected $seat_count = 2;

    function car_detail()
    {
        echo $this->wheel_count;
        echo $this->door_count;
        echo $this->seat_count;
    }
}

$bmw = new Cars();

//echo $bmw->wheel_count;
//echo $bmw->door_count;
//echo $bmw->seat_count;

echo $bmw->car_detail();


