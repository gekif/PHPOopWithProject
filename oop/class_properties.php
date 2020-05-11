<?php

class Cars
{
    var $wheel_count = 4;
    var $door_count = 4;

    function car_detail()
    {
        return "This car has $this->wheel_count wheel and $this->door_count door";
    }
}

$bww = new Cars();
$mercedes = new Cars();

echo $bww->wheel_count;
echo '<br>';
echo $bww->car_detail();
echo '<br>';
echo $bww->door_count;
echo '<br>';
echo $bww->car_detail();
echo '<br>';

echo $bww->wheel_count = 10;
echo '<br>';
echo $bww->car_detail();
echo '<br>';
echo $bww->door_count = 20;
echo '<br>';
echo $bww->car_detail();
echo '<br>';




