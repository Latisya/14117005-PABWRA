<?php
    $data = array("lanirne","aduh","qifuat","toda","anevi","samid","kifuat");
    echo "Data awal : ";
    echo "<br>";
    for ($i=0; $i < 7 ; $i++) {
        echo $i+1; echo ". ";
        echo $data[$i];
        echo "<br>";
    }
    sort($data);
    echo "<br>";
    echo "Data setelah di urutkan : ";
    echo "<br>";
    for ($i=0; $i < 7 ; $i++) {
        echo $i+1; echo ". ";
        echo $data[$i];
        echo "<br>"; 
    }
?>