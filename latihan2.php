<?php 
//FUNGSI IF
//JIKA UMUR LEBIH 20 TAHUN, MAKA ANDA DAPAT MENGENDARAI MOBIL
//JIKA UMUR LEBIH 17 TAHUN, MAKA ANDA DAPAT MENGENDARAI MOTOR
//JIKA UMUR LEBIH 10 TAHUN, MAKA ANDA DAPAT MENGENDARAI SEPEDA
//SELAIN ITU TIDAK BOLEH
$umur=21; //ubah umurnya
if ($umur > 20) {
    echo "Selamat Kamu Dapat Mengendarai Mobil";
} 
else if ($umur > 17) {
    echo "Selamat Kamu Dapat Mengendarai Motor";
}
else {
    echo "Kamu dilarang Mengendarai Apapun";
}

echo "<hr>";

//jika umur <40 dan umur >=17 ket: dewasa
//jika umur <17 dan umur >=9 ket: remaja
//jika umur <9 dan umur >5 ket: anak-anak
//jika umur <=5 dan umur >0 ket: balita
//selain itu umur > 40 ket: tua
//JAWABAN

$nama = "Ali";
    $umur = 22;
    if ($umur<40 && $umur>=17){
        $ket="Dewasa";
    }
    else if ($umur<17 && $umur>=9){
        $ket="Remaja";
    }
    else if ($umur<9 && $umur>5){
        $ket="Anak-anak";
    }
    else if ($umur=5 && $umur>0){
        $ket="Anak-anak";
    }
    else {
        $ket="Tua";
    }

    echo"Nama: $nama <br> Umur: $umur <br> Keterangan :$ket";
// echo "Nama Saya $umur keterangan $ket";

echo "<hr>";

//soal:
//jika nilai >6, maka nilai bagus
//selain itu buruk
$nilai=5;
//cara if
if($nilai >6){
    echo "Baik";
}
else echo "Buruk";

echo "<hr>";

//cara ternary:
echo $nilai>6 ? "Baik" : "Buruk";

$nilai = 8; // Ubah nilai sesuai kebutuhan
$status_nilai = ($nilai > 6) ? "Bagus" : "Tidak Bagus";
echo "Nilai: $nilai<br>";
echo "Status Nilai: $status_nilai";

echo "<hr>";

$baju= 'L'; //ukuran baju
$baju = strtolower ($baju);
switch ($baju)
{
    case "L";
    case "l";
        echo "Large";
        break;
    case "M" && "m";
        echo "Medium";
        break;
    default;
        echo "Small";    
}
echo "<hr>";

//tugas 1 switchcase
$nilai= 40;
switch($nilai) {
    case $nilai <=40 : 
        echo "$nilai: Nilai Kurang";
    break;
    case $nilai <=70 : 
        echo "$nilai: Nilai Cukup";
    break;
    default;
      echo "null";
}
echo "<hr>";

//tugas 2 switchcase
$nilai2= 40;
switch($nilai2) {
    case $nilai2  >=0 && $nilai2 <35:
        echo "$nilai: E";
    break;
    case $nilai2 >=35 && $nilai2 <=60: 
        echo "$nilai2: D";
    break;
    default;
      echo "null";
}
echo "<hr>";


?>

