<?php 
// abstract class shape {
//     abstract public function calculateArea();
// }

// class circle extends shape {
//     private $radius;

//     public function __construct($radius) {
//         $this->radius = $radius;
//     }

//     public function calculateArea() {
//         return pi() * pow($this->radius,2);
//     }
// }

// $obj = new circle(10);
// echo $obj->calculateArea();

// Define an interface for vehicles
// interface Vehicle {
//     public function start();
//     public function accelerate();
//     public function brake();
//     public function honk();
// }

// // Concrete class for a Car implementing the Vehicle interface
// class Car implements Vehicle {
//     public function start() {
//         echo "Car started.\n";
//     }

//     public function accelerate() {
//         echo "Car accelerating.\n";
//     }

//     public function brake() {
//         echo "Car braking.\n";
//     }

//     public function honk() {
//         echo "Car honking.\n";
//     }
// }

// // Concrete class for a Bicycle implementing the Vehicle interface
// class Bicycle implements Vehicle {
//     public function start() {
//         echo "Bicycle started.\n";
//     }

//     public function accelerate() {
//         echo "Bicycle speeding up.\n";
//     }

//     public function brake() {
//         echo "Bicycle braking.\n";
//     }

//     public function honk() {
//         echo "Bicycles don't honk.\n";
//     }
// }

// // Function to demonstrate using different vehicles
// function testVehicle(Vehicle $vehicle) {
//     $vehicle->start();
//     $vehicle->accelerate();
//     $vehicle->brake();
//     $vehicle->honk();
//     echo "\n";
// }

// // Create instances of the Car and Bicycle classes
// $car = new Car();
// $bicycle = new Bicycle();

// // Test the different vehicles
// echo "Testing Car:\n";
// testVehicle($car);

// echo "<br>Testing Bicycle:\n";
// testVehicle($bicycle);


interface RemoteControl {
    public function powerOn();
    public function volumeUp();
    public function volumeDown();
    public function channelUp();
    public function channelDown();
}

class tvRemote implements RemoteControl {
    public function powerOn() {
        echo "Tv is On. ";
    }

    public function volumeUp() {
        echo "Volume Up.\n";
    }

    public function volumeDown() {
        echo "Volume Down.\n";
    }

    public function channelUp() {
        echo "Channel Up.\n";
    }

    public function channelDown() {
        echo "Channel Down.\n";
    }
}

class CarRemote implements RemoteControl {
    public function powerOn() {
        echo "<br>Car is started.\n";
    }

    public function volumeUp() {
        echo "Car engine sound louder.\n";
    }

    public function volumeDown() {
        echo "Car engine sound quieter.\n";
    }

    public function channelUp() {
        echo "Switching to a faster lane.\n";
    }

    public function channelDown() {
        echo "Slowing down.\n";
    }
}

function operateDevice(RemoteControl $device) {
    $device->powerOn();
    $device->volumeUp();
    $device->volumeDown();
    $device->channelUp();
    $device->channelDown();
}

$tvRemote = new tvRemote();
operateDevice($tvRemote);

$carRemote = new CarRemote ();
operateDevice($carRemote);
?>