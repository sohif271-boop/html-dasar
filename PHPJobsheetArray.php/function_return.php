<?php
function hitung($tgllahir, $tglsekarang){
    $umur = $tglsekarang - $tgllahir;
    return $umur;
}
function perkenalan($nama,$salam){
    echo "$salam";
    echo "Perkenalkan Nama Saya $nama";
    echo " Salam Kenal";
}
perkenalan("sohif fudin anwarul huda ","Halo Fanssss ");
echo"<br>";

$saya = "Yasmine ";
$ucapsalam = "Haloooo sayanggg ";

perkenalan($saya,$ucapsalam);
echo "Umur saya adalah". hitung(2006,2026) ."tahun";
?>