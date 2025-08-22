<?php 

class car {
    public $brand ; 
    public $color ; 
    public $speed ; 


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
$car1-> brand = 'toyota' ; 
$car2 -> color = 'red'; 
$car3 -> speed = 0 ; 

echo $car1->start() . "<br>";
echo $car1->accelerate(30) . "<br>";
echo $car1->accelerate(20) . "<br>";
echo $car1->stop() . "<br><br>";
?>