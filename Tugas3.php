<?php

$nilai_mahasiswa = [
    ['no' => 1, 'nama' => 'Ahmad', 'nilai' => 75],
    ['no' => 2, 'nama' => 'Ali', 'nilai' => 85],
    ['no' => 3, 'nama' => 'Dwi', 'nilai' => 60],
    ['no' => 4, 'nama' => 'Dewi', 'nilai' => 78],
    ['no' => 5, 'nama' => 'Erika', 'nilai' => 90],
    ['no' => 6, 'nama' => 'Fadlan', 'nilai' => 62],
    ['no' => 7, 'nama' => 'Gita', 'nilai' => 88],
    ['no' => 8, 'nama' => 'Haikal', 'nilai' => 95],
    ['no' => 9, 'nama' => 'Irana', 'nilai' => 65],
    ['no' => 10, 'nama' => 'Johan', 'nilai' => 72],
];

// Fungsi untuk mendapatkan grade dari nilai
function getGrade($nilai) {
    return $nilai >= 85 ? 'A' :
           ($nilai >= 75 ? 'B' :
           ($nilai >= 65 ? 'C' :
           ($nilai >= 55 ? 'D' : 'E')));
}

// Fungsi untuk mendapatkan predikat dari grade
function getPredikat($grade) {
    switch ($grade) {
        case 'A':
            return 'Memuaskan';
        case 'B':
            return 'Bagus';
        case 'C':
            return 'Cukup';
        case 'D':
            return 'Kurang';
        default:
            return 'Buruk';
    }
}

// Fungsi untuk mendapatkan keterangan lulus/gagal
function getKeterangan($nilai) {
    return $nilai >= 60 ? 'Lulus' : 'Gagal';
}

// Hitung agregat nilai
$nilai_total = array_column($nilai_mahasiswa, 'nilai');
$nilai_tertinggi = max($nilai_total);
$nilai_terendah = min($nilai_total);
$jumlah_mahasiswa = count($nilai_mahasiswa);
$jumlah_nilai = array_sum($nilai_total);
$rata_rata = $jumlah_nilai / $jumlah_mahasiswa;

// Generate NIM dengan format 2021080111 dan seterusnya
$start_nim = 20210801020;
foreach ($nilai_mahasiswa as $key => &$mahasiswa) {
    $mahasiswa['nim'] = $start_nim + $key;
}

$agregat_nilai = [
    'Nilai Tertinggi' => $nilai_tertinggi,
    'Nilai Terendah' => $nilai_terendah,
    'Nilai Rata-Rata' => number_format($rata_rata, 2),
    'Jumlah Mahasiswa' => $jumlah_mahasiswa,
    'Jumlah Keseluruhan Nilai' => $jumlah_nilai,
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai Mahasiswa</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #1ecbe1; /* Warna latar belakang body */
    }
    table {
        border-collapse: collapse;
        width: 90%;
        margin: 10px auto;
        background-color: #fff; /* Warna latar belakang tabel */
    }
    th, td {
        border: 1px solid black;
        padding: 6px;
        text-align: center;
        font-size: 17px;
    }
    th {
        background-color: #f2f2f2;
    }
    tfoot {
        font-weight: bold;
    }
    footer {
        text-align: center;
        margin-top: 30px auto;
        color: #666;
    }
</style>

</head>
<body>
    <h3 align='center'>Daftar Nilai Mahasiswa</h3>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
                <th>Nilai</th>
                <th>Keterangan</th>
                <th>Grade</th>
                <th>Predikat</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($nilai_mahasiswa as $nilai) : ?>
                <tr>
                    <td><?= $nilai['no'] ?></td>
                    <td><?= $nilai['nama'] ?></td>
                    <td><?= $nilai['nim'] ?></td>
                    <td><?= $nilai['nilai'] ?></td>
                    <td><?= getKeterangan($nilai['nilai']) ?></td>
                    <td><?= getGrade($nilai['nilai']) ?></td>
                    <td><?= getPredikat(getGrade($nilai['nilai'])) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <?php foreach ($agregat_nilai as $keterangan => $hasil) : ?>
                <tr>
                    <td colspan="6"><?= $keterangan ?></td>
                    <td><?= $hasil ?></td>
                </tr>
            <?php endforeach; ?>
        </tfoot>
    </table>
    <footer>&copy; Ahmad Ali Zulfakor 2024.</footer>
</body>
</html>