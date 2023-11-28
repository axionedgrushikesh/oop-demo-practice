<?php

class primeNumber {
    private $limit;

    public function __construct($limit) {
        $this->limit = $limit;
    }

    public function generatePrimeNum() {
        $primes = [];
        for ($i = 2; $i < $this->limit; $i++) {
          if ($this->isPrime($i)) {
            $primes[] = $i;
          }
        }
        return $primes;
    }

    private function isPrime($num) {
        if($num < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if($num % $i === 0) {
                return false;
            }
        }
        return true;
    }
}

$limit = 100;
$newObj = new primeNumber($limit); 
$primeArr = $newObj->generatePrimeNum();

echo "<pre>";
print_r($primeArr);
?>
