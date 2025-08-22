<?php
class Car {
    public $brand;
    public $color;
    public $speed;

    public function start() {
        return "{$this->brand} ({$this->color}) has started!";
    }

    public function stop() {
        $this->speed = 0;
        return "{$this->brand} ({$this->color}) has stopped!";
    }

    public function accelerate($increase) {
        $this->speed += $increase;
        return "{$this->brand} is now running at {$this->speed} km/h.";
    }
}

$car1 = new Car();
$car1->brand = "Toyota";
$car1->color = "Red";
$car1->speed = 0;

echo $car1->start() . "<br>";
echo $car1->accelerate(30) . "<br>";
echo $car1->accelerate(20) . "<br>";
echo $car1->stop() . "<br><br>";

$car2 = new Car();
$car2->brand = "BMW";
$car2->color = "Black";
$car2->speed = 0;

echo $car2->start() . "<br>";
echo $car2->accelerate(50) . "<br>";
echo $car2->stop() . "<br><br>";

$car3 = new Car();
$car3->brand = "Tesla";
$car3->color = "White";
$car3->speed = 0;

echo $car3->start() . "<br>";
echo $car3->accelerate(100) . "<br>";
