<?php
function tampil(){
    echo"Riqza Yasmine Soraya";
    tampil();
}
tampil();



function number(int $jumlah, int $indeks = 1){
    echo "perulangan ke - {$indeks}";

    if($indeks < $jumlah){
        number($jumlah, $indeks + 1);
    }
}
number(10);




?>