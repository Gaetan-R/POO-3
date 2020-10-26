<?php
require_once 'Vehicle.php';
require_once 'Car.php';

class Truck extends Vehicle
{

    private $storageCapacity;

    protected $storage;



    public function __construct(string $color, int $nbSeats, int $nbWheels, string $energy, int $storageCapacity, int $storage)
    {
        parent::__construct($color, $nbSeats, $nbWheels,$energy);
        $this->storageCapacity = $storageCapacity;
        $this->storage = $storage;
        $this->energy = $energy;

    }

    public function storageState() {
        if ($this->storage >= $this->storageCapacity) {
        echo "Full";
    }else {
        return "In filling";
}
}


    public  function getStorageCapacity(): int
{
    return $this->storageCapacity;
}

public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }


    public  function getStorage(): int
    {
        return $this->storage;
    }

    public function setStorage(int $storage): void
    {
        $this->storage = $storage;
    }





}




