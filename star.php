<?php
class StarPattern
{
    public function star()
    {
        for ($i = 0; $i <= 5; $i++) {
            for ($j = 5 - $i; $j >= 0; $j--) {
                echo "* ";
            }
            echo "<br>";
        }
    }

    public function star2()
    {
        $k = 1;
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j <= $i; $j++) {
                if ($j % 2 == 0) {
                    $k = 0;
                } else {
                    $k = 1;
                }
                echo $k . " ";
            }
            echo "<br>";
        }

    }
}

$obj = new StarPattern();
echo $obj->star2();
?>