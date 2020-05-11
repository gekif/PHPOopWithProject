<?php

class Cars
{
    // Static attached to the class, not instantiate
    static $wheel_count = 4;
    static $door_count = 4;

    static function car_detail()
    {
        echo Cars::$wheel_count;
    }
}

$bmw = new Cars();

//echo $bmw->wheel_count;
//echo $bmw->door_count;
//echo $bmw->seat_count;

echo $bmw->car_detail();

echo Cars::$door_count;
echo Cars::car_detail();
