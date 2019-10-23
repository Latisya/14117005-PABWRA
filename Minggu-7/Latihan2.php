<html>
    <body>
    <form action="Latihan2.php" method="POST">
        Nama : <input type="text" name="nama"></input><br/>
        Warna : <input type="text" name="warna"></input><br/>
        <input type="submit" name="submit" value="Submit"></input>
    </form>

<?php
    function Harga($nama, $color="red"){
        $panjang = strlen($nama);
        if ($panjang > 20) {
            $harga = $panjang*700;
        } elseif ($panjang > 10) {
            $harga = $panjang*500;
        } elseif($panjang > 0) {
            $harga = $panjang*300;
        }
        echo 'Harga = '," $harga ", '<br>Warna = <font color="'.$color.'">' ,"$color" , '</font><br>';
    }
   if ($_POST['warna']=="") {
        Harga($_POST['nama']);
    } else{
        Harga($_POST['nama'] , $_POST['warna']);
    } 
?>
    </body>
</html>