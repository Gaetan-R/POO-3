<?php

require_once 'HighWay.php';

class PedestrianWay extends HighWay
{

    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct(1, 10);

    }

    public function addVehicle($Vehicle) {

            if ($Vehicle instanceof Skateboard) {
                $this->setcurrentVehicles((array)$Vehicle);
            }
            if ($Vehicle instanceof Bicycle) {
                $this->setCurrentVehicles((array)$Vehicle);
            }
        }

    }