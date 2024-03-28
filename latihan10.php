<?php
$ar_buah = ['Pepaya','Mangga','Pisang','Anggur','Jeruk'];
echo $ar_buah[4];
echo '<hr>';

$jumlah = count($ar_buah);
echo $jumlah;

echo '<hr>';

foreach ($ar_buah as $value) {
    echo $value."<br>";
}

echo '<hr>';

$ar_hewan = [10 => 'Babi', 20 => 'Bebek', 'Kucing', 30 => 'Putri Duyung', 'Anjing Galak'];
echo $ar_hewan[10];

echo '<hr>';

foreach ($ar_hewan as $id => $value) {
    echo $id .". ".$value."<br>";
}

echo '<hr>';

$daftar_tahanan = [
    [
        "nama" => "Budi",
        "alamat" => "Depok",
        "tlp" => 12345,
        "status" => "Jomblo",
    ],
    [
        "nama" => "Alif",
        "alamat" => "Bogor",
        "tlp" => 898955,
        "status" => "Duda",
    ],
    [
        "nama" => "Jamal",
        "alamat" => "Mars",
        "tlp" => 898955,
        "status" => "Jomblo",
    ],
];

foreach ($daftar_tahanan as $namax) {
    echo $namax['nama'] . "<br>";
}

echo '<hr>';

$a1 = [
    "nama" => "Budi",
    "alamat" => "Depok",
    "tlp" => 12345,
    "status" => "Jomblo",
];

$a2 = [
    "nama" => "Alif",
    "alamat" => "Bogor",
    "tlp" => 898955,
    "status" => "Duda",
];

$a3 = [
    "nama" => "Jamal",
    "alamat" => "Mars",
    "tlp" => 898955,
    "status" => "Jomblo",
];

$daftartahanan = [$a1, $a2, $a3];

foreach ($daftartahanan as $namax) {
    echo $namax['nama'] . "<br>";
}
?>
