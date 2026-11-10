<?php
// $nilai = 30;

// if($nilai >= 90 && $nilai < 100){
//     echo"nilai : A";
// }elseif($nilai >= 80 && $nilai < 90){
//     echo "Nilai : B";
// }elseif($nilai >= 70 && $nilai < 80){
//     echo "Nilai : C";
// }elseif($nilai < 70){
//     echo "Nilai : D";
// }



// $jaraksaatini=0;
// $jaraktarget = 400;
// $peningkatanharian = 30;
// $hari = 0;

// while($jaraksaatini<$jaraktarget){
//     $jaraksaatini += $peningkatanharian;
//     $hari++;
// }
// echo"atlet tersebut memerlukan $hari";


// $jumlahlahan = 100;
// $tanamanperlahan = 30;
// $buahpertanaman = 10;
// $jumlahbuah = 0;

// for ($i=1; $i<=$jumlahlahan; $i++){
//     $jumlahbuah = ($tanamanperlahan * $buahpertanaman ); 
// }
// echo"Buah yang akan di panen $jumlahbuah";



// $skorujian = [10,20,30,40,50];
// $total = 0;

// foreach($skorujian as $skor){
//     $total += $skor;
// }
// echo"Total skor ujian : $total";



// $nilaisiswa =[20,90,89,67,87,92,10,80,30,60];
// foreach($nilaisiswa as $nilai){
//     if($nilai < 85){
//         echo "Nilai : $nilai (Tidak Lulus) <br>";
//         continue;
//     }
//     echo"nilai $nilai (Lulus) <br> ";
// }



// $nilaisiswa = [50,70,78,90,98,46,87,10,20,56,90,89,];
// $nilailulus = [];

// foreach ($nilaisiswa as $nilai){
//     if($nilai >= 75){
//         $nilailulus[] = $nilai;
//     }
// }
// echo"daftar nilai siswa yang lulus :".implode(',', $nilailulus);




// $daftarsiswa =[ ['sohif',90],['fudin',89],['yasmine',90],['riqza',88],['tejo',40],['tahu',60],['tempe',70]];
// $daftarsiswalulus = [];

// foreach ($daftarsiswa as $siswa){
//     if ($siswa[1] > 80){
//         $daftarsiswalulus[] = $siswa[0];
//     }
// }
// echo"Daftar siswa yang LULUS ". implode(',', $daftarsiswalulus);





$daftarsiswa = [
    'Matematika' =>[
    ['sohif',90],
    ['fudin',98],
    ['tejo',60],
    ],

    'Bahasa Indonesia' =>[
        ['riqza',90],
        ['yasmine',89],
        ['tahu',50]
    ],
    ];

    $matakuliah = 'Matematika';
    echo"daftar nama $matakuliah";
    foreach($daftarsiswa[$matakuliah] as $nilai){
        echo"Nama : {$nilai[0]}, Nilai : {$nilai[1]}";
    }