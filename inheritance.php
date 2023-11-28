<?php
class grandParentClss {
    public function tellStory() {
        echo "Once upon a time: ";
    }
}

class parentClass extends grandParentClss {
    public function cookDinner() {
        echo "cooking an dinner";
    }
}

class childclass extends parentClass {
    public function playGames() {
        echo "playing games";
    }
}

$grandparent = new grandParentClss();
$parent = new parentClass();
$child = new ChildClass();

$grandparent->tellStory();
$parent->tellStory();
$child->cookDinner();
?>