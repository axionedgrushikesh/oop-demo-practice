<?php
// include_once("abstraction.php");
// include_once("inheritance.php");
// include_once("polymorphisom.php");
// include_once("encapsulation.php");
// include_once("traits.php");
// include_once("namespace.php");
// include_once("prime.php");
// include_once("some.php");
include_once("star.php");


// echo "1)";
// class Animal {
//     protected $name;

//     public function __construct($name) {
//         $this->name = $name;
//     }
    
//     protected function makeSound () {
//         echo "Generic animal sound <br>";
//     }
// }

// class Dog extends Animal {
//     public function bark () {
//         echo $this->name . " says woof!<br>";
//         $this->makeSound();
//     }
// }

// $myDog = new Dog("Buddy");
// $myDog->bark();

// echo "2)";
// class House {
//     public $color;

//     // Constructor
//     public function __construct($initialColor) {
//         echo "A new house is constructed!\n";
//         $this->color = $initialColor;
//     }

//     // Destructor
//     public function __destruct() {
//         echo "<br>The house is being destroyed. Cleaning up...\n";
//     }

//     public function getColor() {
//         return $this->color;
//     }
// }

// // Creating a new instance (object) of the House class
// $my_house = new House("Red");

// // Accessing the color property using a method
// echo "My house is " . $my_house->getColor() . ".\n";

// echo "<br>3)";
// class sports {
//     protected $pname;
//     public function __construct($pname) {
//         $this->pname = $pname;
//     }

//     protected function callName() {
//         echo 'Hi ' . $this->pname;
//     }
// }

// class cricket extends sports {
//     public function game () {
//         echo $this->pname . " is a good batsman";
//         $this->callName();
//     }
// }

// $obj = new cricket('Rohit');
// $obj->game();

// echo "<br>4)";
// class MyClass {
//     private $privateVar = "I am private!";
    
//     private function privateMethod() {
//         echo "This method is private!\n";
//     }
// }

// $obj = new MyClass();
// // $obj->privateMethod();
// echo $obj->privateVar;
// $obj->privateMethod();


?>