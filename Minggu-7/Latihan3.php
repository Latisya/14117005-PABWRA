<?php
    function faktorial($angka){
        if ($angka > 1) {
            return $angka * faktorial($angka-1);
        } elseif ($angka == 1) {
            return $angka;
        }
    }
    $n = 5;
    echo "Angka = " .$n. "<br>";
    echo "Faktorial = " ,faktorial($n), "<br>";
?>