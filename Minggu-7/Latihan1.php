<?php

function swap (&$a, &$b){
    $temp = $a;
    $a = $b;
    $b = $temp;
}
$a = 16;
$b = 19;

echo "Awal = " .$a. " - " .$b;
swap ($a, $b);
echo "<br/>";
echo "Hasil = " .$a. " - " .$b;
?>