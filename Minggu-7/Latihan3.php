<?php

function factorial($n) {
  if($n ==0) {
	   return 1;
    }
  else {	
	   return $n * factorial($n-1);
    }
	}
$n = 5;
echo "Angka = ".$n. "<br/>";
echo "Hasil Faktorial = ".factorial($n);
?>