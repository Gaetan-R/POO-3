<?php

include 'Vehicle.php';
include'Bicycle.php';
include'Skateboard.php';
include 'Car.php';
include 'Truck.php';
include 'MotorWay.php';
include 'PedestrianWay.php';
include 'ResidentialWay.php';

$bicycle        = new Bicycle('Velo', 1,2);
$skateboard     = new Skateboard('Skate',1,4);
$car            = new Car('green', 4, 4, 'electric');
$truck          = new Truck('silver',3,10,'fuel',100,0);
$MotorWay       = new MotorWay(4,130);
$PedestrianWay  = new PedestrianWay(1,10);
$ResidentialWay = new ResidentialWay(2,50);

echo '<pre>';
$MotorWay->addVehicle($car);
var_dump($MotorWay);

echo'<pre>';
$ResidentialWay->addVehicle($bicycle);
$ResidentialWay->addVehicle($skateboard);
$ResidentialWay->addVehicle($car);
$ResidentialWay->addVehicle($truck);
var_dump($ResidentialWay);

echo '<pre>';
$PedestrianWay->addVehicle($skateboard);
$PedestrianWay->addVehicle($bicycle);
var_dump($PedestrianWay);


