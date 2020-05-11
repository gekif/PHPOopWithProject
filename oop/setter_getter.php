<?php

class Cars
{
    private $wheel_count = 4;
    private $door_count = 4;
    private $seat_count = 2;

    /**
     * @return int
     */
    public function getWheelCount()
    {
        return $this->wheel_count;
    }

    /**
     * @param int $wheel_count
     */
    public function setWheelCount($wheel_count)
    {
        $this->wheel_count = $wheel_count;
    }

    /**
     * @return int
     */
    public function getDoorCount()
    {
        return $this->door_count;
    }

    /**
     * @param int $door_count
     */
    public function setDoorCount($door_count)
    {
        $this->door_count = $door_count;
    }

    /**
     * @return int
     */
    public function getSeatCount()
    {
        return $this->seat_count;
    }

    /**
     * @param int $seat_count
     */
    public function setSeatCount($seat_count)
    {
        $this->seat_count = $seat_count;
    }



}

$bmw = new Cars();

// Before
echo $bmw->getSeatCount();

// After
$bmw->setSeatCount(10);
echo $bmw->getSeatCount();



