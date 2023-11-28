<?php

// Mail handler for CityA
namespace CityA;

class MailHandler {
    public static function deliver() {
        echo "Mail delivered in CityA.\n";
    }
}

// Mail handler for CityB
namespace CityB;

class MailHandler {
    public static function deliver() {
        echo "Mail delivered in CityB.\n";
    }
}

// Using the MailHandlers
CityA\MailHandler::deliver(); // Mail delivered in CityA.
CityB\MailHandler::deliver(); // Mail delivered in CityB.
?>
