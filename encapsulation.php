<?php

class BankAccount {
    private $balance; // Private property, not directly accessible from outside

    public function __construct($initialBalance) {
        $this->balance = $initialBalance;
    }

    // Public method to deposit money
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited $amount. New balance: $this->balance\n";
        } else {
            echo "Invalid deposit amount.\n";
        }
    }

    // Public method to withdraw money
    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrawn $amount. New balance: $this->balance\n";
        } else {
            echo "Invalid withdrawal amount or insufficient funds.\n";
        }
    }

    // Public method to check balance
    public function checkBalance() {
        echo "Current balance: $this->balance\n";
    }
}

// Create an instance of the BankAccount class
$account = new BankAccount(1000);

// Interact with the encapsulated methods
$account->checkBalance();   // Current balance: 1000
$account->deposit(500);     // Deposited 500. New balance: 1500
$account->withdraw(200);    // Withdrawn 200. New balance: 1300
$account->checkBalance();   // Current balance: 1300
?>
