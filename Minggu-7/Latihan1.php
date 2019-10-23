<?php
    function swap(&$x, &$y){
        $temp=$x;
        $x=$y;
        $y=$temp;
    }
    $a = 1;
    $b = 2;
    echo "Awal = " .$a. " - " .$b. "<br>";
    swap($a, $b);
    echo "Hasil = " .$a. " - " .$b;
?>