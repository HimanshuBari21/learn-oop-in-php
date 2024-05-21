<title>Vehicle Model</title>
<description>Learning diff between Abs Class and Interface</description>

<?php


interface IVehicle
{
    public function accelerate(int $speed = 5);
}


abstract class Vehicle implements IVehicle
{
    private $currentSpeed;
    private $maxSpeed;
    private $accelarateLimit;

    function __construct(int $currentSpeed = 0, int $maxSpeed = 60, int $accelarateLimit = 5)
    {
        $this->currentSpeed = $currentSpeed;
        $this->maxSpeed = $maxSpeed;
        $this->accelarateLimit = $accelarateLimit;
    }

    protected function setSpeed(int $speed)
    {
        return $this->currentSpeed = $speed;
    }

    public function accelerate(int $speed = 5)
    {
        if ($speed > $this->accelarateLimit) {
            return ["currentSpeed" => $this->currentSpeed, "message" => "Can't increase mre than {$this->accelarateLimit} at a time"];
        } elseif ($this->currentSpeed < $this->maxSpeed) {
            $this->currentSpeed += $speed;
            return ["currentSpeed" => $this->currentSpeed, "message" => "Speed increased"];
        } else {
            $this->setSpeed($this->maxSpeed);
            return ["currentSpeed" => $this->currentSpeed, "message" => "Max Speed Reached"];
        }
    }
}

class MotorCycle extends Vehicle
{
    public static $noOfWheels = 2;
}


$himanshuBike = new MotorCycle(0, 80, 10);

echo var_dump($himanshuBike->accelerate(5));
echo var_dump($himanshuBike->accelerate(10));
echo var_dump($himanshuBike->accelerate(5));
echo var_dump($himanshuBike->accelerate(10));
echo var_dump($himanshuBike->accelerate(10));
echo var_dump($himanshuBike->accelerate(10));
echo var_dump($himanshuBike->accelerate(10));
echo var_dump($himanshuBike->accelerate(10));
echo var_dump($himanshuBike->accelerate(10));
echo var_dump($himanshuBike->accelerate(10));

?>