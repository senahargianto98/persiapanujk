<?php

function login($email,$password){
    if($email == 'pengguna' AND $password == 'passpengguna'){
        return true;
    }else{
        return false;
    }
}

function totalharga($jumlah,$harga){
    $nilai = $harga*$jumlah;
    return $nilai;
}

function hargadiskon($jumlah,$harga){
    if($jumlah > 36 ){
        $diskon = $harga*$jumlah*0.05;
    }else{
        $diskon = 0;
    }
    return $diskon;
}

function totalbayar($jumlah,$harga){
    $totalbayar = totalharga($jumlah,$harga)-hargadiskon($jumlah,$harga);
    return $totalbayar;
}
?>