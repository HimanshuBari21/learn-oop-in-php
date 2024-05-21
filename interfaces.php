<title>Interface</title>


<?php


interface IVehicle
{
    public function accelerate(int $speed = 5);
    public function getSpeed();
}


class Vehicle implements IVehicle
{
    private $currentSpeed;

    function __construct(int $currentSpeed = 0)
    {
        $this->currentSpeed = $currentSpeed;
    }

    public function accelerate(int $speed = 5)
    {
        return $this->currentSpeed += $speed;
    }

    public function getSpeed()
    {
        return $this->currentSpeed;
    }
}


$motorCycle = new Vehicle(10);

$motorCycle->accelerate(5);
$motorCycle->accelerate(65);
$motorCycle->accelerate(-6);
$motorCycle->accelerate(111);
$motorCycle->accelerate(6);
$motorCycle->accelerate(-100);


echo "<p>Current Speed is: " . $motorCycle->getSpeed() . "</p>";



?>