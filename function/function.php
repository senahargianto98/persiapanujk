<?php 
function luassegitiga($alas,$tinggi){
	$luassegitiga= 0.5*$alas*$tinggi;
    return $luassegitiga;
    
}

function luaslingkaran($jari){
	$luaslingkaran = 3.14*$jari*$jari;
    return $luaslingkaran;
    
}

function luasjajargenjang($alas,$tinggi){
	$luasjajargenjang = $alas*$tinggi;
    return $luasjajargenjang;
    
}

function kelilingsegitiga($a,$b,$c){
	$kelilingsegitiga = $a*$b*$c;
    return $kelilingsegitiga;
    
}

function kelilinglingkaran($jari){
	$kelilinglingkaran = 2*3.14*$jari;
    return $kelilinglingkaran;
    
}

function kelilingjajargengjang($a,$b){
	$kelilingjajargenjang = 2*($a+$b);
    return $kelilingjajargenjang;
    
}

?>