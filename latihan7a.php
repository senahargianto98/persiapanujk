<?php 
    $buku = 25;
    $harga = 12500;
    $diskon = $harga*$buku*0.05;
    echo "Harga buku = $harga";
    echo "<br>";
    echo "Jumlah buku = $buku";
    echo "<br>";
    if($buku > 20){
        $nilai1 = $harga*$buku;
        echo "Harga Tanpa Diskon = $nilai1";
        echo "<br>";
        $nilai=$harga*$buku-$diskon;
        echo "Harga dengan diskon = $nilai";
    }else{
        $nilai2=$harga*$buku;
        echo $nilai2;
    }
?>