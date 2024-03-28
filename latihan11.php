<?php

$a1 = ['kode' => '1111', 'buah' => 'Apel', 'harga' => 20000, 'jumlah' => 4];
$a2 = ['kode' => '2222', 'buah' => 'Mangga', 'harga' => 25000, 'jumlah' => 5];
$a3 = ['kode' => '3333', 'buah' => 'Pisang', 'harga' => 30000, 'jumlah' => 6];
$a4 = ['kode' => '4444', 'buah' => 'Jambu', 'harga' => 35000, 'jumlah' => 7];
$a5 = ['kode' => '5555', 'buah' => 'Durian', 'harga' => 40000, 'jumlah' => 8];

$ar_buah = [$a1,$a2,$a3,$a4,$a5];

// Deklarasikan Nama Nama Judul Table Header Menggunakan Looping Array
$ar_judul = ['No', 'Kode', 'Buah', 'Harga', 'Jumlah Beli', 'Harga Kotor', 'Diskon', 'Harga Bayar'];

$jumlah_harga = array_column($ar_buah, 'harga');
$harga_total = array_sum($jumlah_harga);
$harga_tertinggi = max($jumlah_harga);
$harga_terendah = min($jumlah_harga);
$jumlah_transaksi = count($ar_buah);
$harga_rata2 = $harga_total / $jumlah_transaksi;

$keterangan = [
    'Harga Total' => $harga_total,
    'Harga Tertinggi' => $harga_tertinggi,
    'Harga Terrendah' => $harga_terendah,
    'Jumlah Transaksi' => $jumlah_transaksi,
    'Harga Rata Rata' => $harga_rata2,
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buah Buahan</title>
</head>
<body>
    <h3 align='center'>Daftar Buah Buahan</h3>
    <table border=1 cellspacing='1' cellpadding='10' width="100%">
        <thead>
            <tr>
                <?php
                    foreach ($ar_judul as $judul) {
                ?>
                    <th><?= $judul ?></th>
                <?php
                    }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
                $no = 1;
                foreach ($ar_buah as $buah) {
                    $harga_kotor = $buah['harga'] * $buah['jumlah'];
                    $diskon = ($buah['buah'] == 'Durian' && $buah['jumlah'] >= 5) ? $harga_kotor * 0.2 : $harga_kotor * 0.1;
                    
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $buah['kode']; ?></td>
                    <td><?= $buah['buah']; ?></td>
                    <td><?= $buah['harga']; ?></td>
                    <td><?= $buah['jumlah']; ?></td>
                    <td><?= $harga_kotor; ?></td>
                    <td><?= $diskon; ?></td>
                    <td><?= $harga_kotor - $diskon; ?></td>
                </tr>
            <?php
                }
            ?>
        </tbody>
        <tfoot>
            <?php
                foreach ($keterangan as $ket => $hasil) {
            ?>
            <tr>
                <td colspan="3"><?= $ket ?></td>
                <td colspan="5"><?= $hasil ?></td>
            </tr>
            <?php
                }
            ?>
        </tfoot>
    </table>
</body>
</html>