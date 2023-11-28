<?php
// interface ButtonPress {
//     public function pressButton();
// }

// class Tv implements ButtonPress {
//     public function pressButton() {
//         echo "tv is on<br>";
//     }
// }

// class Radio implements ButtonPress {
//     public function pressButton() {
//         echo "radio is on <br>";
//     }
// }

// function operateDevice(ButtonPress $device) {
//     $device->pressButton();
// }

// $tv = new Tv();
// $radio = new Radio();

// operateDevice($tv);
// operateDevice($radio);

interface Machine {
    public function calcTask();
}

class Circle implements Machine {
    private $radius;
    public function __construct($radius) {
        $this->radius = $radius; 
    }

    public function calcTask(){
        return $this -> radius * $this -> radius * pi();
    }
}

class Rectangle implements Machine {
    private $width;
    private $height;
    public function __construct($width, $height){
       $this -> width = $width;
       $this -> height = $height;
    }
    public function calcTask(){
       return $this -> width * $this -> height;
    }
}

$mycirc = new Circle(3);
$myrect = new Rectangle(3,4);
echo $mycirc->calcTask();
echo $myrect->calcTask();
?>