<?php
 trait Logger {
    public function logMessage($message) {
        echo "Log: $message<br>";
    }
 }

 class UserManger {
    use Logger;

    public function addUser ($username) {
        $this->logMessage("User added: $username");
    }
 }

 class ProductManager {
    use Logger;

    public function addProduct ($productName) {
        $this->logMessage("Product added: $productName");
    }
 }

 $userManager = new UserManger();
 $productManger = new ProductManager();

 $productManger->addProduct("Smartphone");
 $userManager->addUser("John Doe");
?>
