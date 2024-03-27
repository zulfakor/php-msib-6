<?php
$siswa = 'Budi Santoso';
$matakuliah = 'PHP';
$nilai = 70; //nilai yg diinput

//ternary 
//jika nilai >=60 Lulus
//selain itu Gagal
$ket = ($nilai >= 60) ? 'Lulus' : 'Gagal';

//if
if ($nilai >= 85 && $nilai <= 100) {
    $grade = 'A';
} else if ($nilai >= 75 && $nilai < 85) {
    $grade = 'B';
} else {
    $grade = '';
}

//switch case
switch ($grade){
    case 'A':
        $predikat= 'Memuaskan';
        break;
    case 'B':
        $predikat= 'Bagus';
        break;
    default:
        $predikat='Cukup';
        break;
}

echo "<hr>";

//cetak di dalam PHP
echo $siswa . "<br>";
echo $matakuliah . "<br>";
echo $nilai . "<br>";
echo $ket . "<br>";
echo $grade . "<br>";
echo $predikat;
?>
