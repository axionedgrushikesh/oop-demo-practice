<?php
// class sumOfDigit {
//     public $num1;
//     public $num2;

//     public function __construct($num1, $num2) {
//         $this->num1 = $num1;
//         $this->num2 = $num2;
//     }

//     public function sum() {
//         return $this->num1 + $this->num2;
//     }
// }

// $obj = new sumOfDigit(3,5);
// $print = $obj->sum();

// echo $print;

// class factorial {
//     public $num;
//     public function __construct($num) {
//         $this->num = $num;
//     }
    
//     public function isFactorial () {
//         $factorial = 1;
//         for ($i = $this->num; $i >= 1; $i--) {
//             $factorial = $factorial * $i;
//         }

//         return $factorial;
//     }
// }

// $obj = new factorial(5);
// $fact = $obj->isFactorial();

// echo $fact;

class reverseNum {
    public $num;
    
    public function __construct($num) {
        $this->num = $num;
    }
    
    public function reverse() {
        $revnum = 0;
        while ($num > 1) {  
            $rem = $num % 10;
            $revnum = ($revnum * 10) + $rem;  
            $num = ($num / 10);
        }
        return $revnum;
    }
}

$obj = new reverseNum(2342);
$newNum = $obj->reverse();
echo $newNum;
?>