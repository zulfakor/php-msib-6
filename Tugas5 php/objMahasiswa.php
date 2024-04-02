<!DOCTYPE html>
<html>
<head>
    <title>Form Nilai Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2>Form Nilai Mahasiswa</h2>
    <form method="post" action="">
        NIM: <input type="text" name="nim"><br>
        Nama: <input type="text" name="nama"><br>
        Kuliah: <input type="text" name="kuliah"><br>
        Nilai: <input type="number" name="nilai"><br>
        Mata Kuliah: <input type="text" name="matakuliah"><br> 
        <input type="submit" value="Submit">
    </form>

    <h2>Daftar Nilai Ujian Mahasiswa</h2>
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kuliah</th>
            <th>Mata Kuliah</th> 
            <th>Nilai</th>
            <th>Grade</th>
            <th>Predikat</th>
            <th>Status</th>
        </tr>
        <?php
        require_once 'mahasiswa.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $kuliah = $_POST['kuliah'];
            $nilai = $_POST['nilai'];
            $matakuliah = $_POST['matakuliah']; // Tambah baris ini

            $mahasiswa = new Mahasiswa($nim, $nama, $kuliah, $nilai, $matakuliah);

            echo '<tr>';
            echo '<td>' . $mahasiswa->nim . '</td>';
            echo '<td>' . $mahasiswa->nama . '</td>';
            echo '<td>' . $mahasiswa->kuliah . '</td>';
            echo '<td>' . $matakuliah . '</td>';
            echo '<td>' . $mahasiswa->nilai . '</td>';
            echo '<td>' . $mahasiswa->grade . '</td>';
            echo '<td>' . $mahasiswa->predikat . '</td>';
            echo '<td>' . $mahasiswa->status . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
    <br>
    <button onclick="window.history.back()">Kembali</button>
</body>
</html>
