<?php

require_once 'HighWay.php';
final class ResidentialWay extends HighWay
{
    public function __construct( int $nbLane,int $maxSpeed )
    {
        parent::__construct(2,50);

    }

    public function addVehicle($Vehicle) {
        if ($Vehicle instanceof Car) {
            $this->setcurrentVehicles((array)$Vehicle);
        }
        if ($Vehicle instanceof Truck) {
            $this->setCurrentVehicles((array)$Vehicle);
        }
        if ($Vehicle instanceof Bicycle) {
            $this->setCurrentVehicles((array)$Vehicle);
        }
    }

}