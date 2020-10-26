<?php

require_once 'HighWay.php';


class MotorWay extends HighWay
{
    protected $currentVehicles ;

    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct(4, 130);
            }



    public function addVehicle($Vehicle) {
        if ($Vehicle instanceof Car) {
            $this->setcurrentVehicles((array)$Vehicle);

        }
    }

    }



