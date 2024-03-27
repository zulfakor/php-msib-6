<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="Latihan5.php" method="POST">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="siswa" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matakuliah" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matakuliah" name="matakuliah" class="custom-select">
        <option value="pilih">--PILIHAN MATAKULIAH--</option>
        <option value="html">HTML</option>
        <option value="ui/ux">UI/UX</option>
        <option value="php">PHP</option>
        <option value="laravel">LARAVEL</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $siswa = $_POST['siswa'];
    $matakuliah = $_POST['matakuliah'];
    $nilai = $_POST['nilai'];

    // Ternary 
    // Jika nilai >=60 Lulus, selain itu Gagal
    $ket = ($nilai >= 60) ? 'Lulus' : 'Gagal';

    // If
    if ($nilai >= 85 && $nilai <= 100) 
        $grade = 'A';
    elseif ($nilai >= 75 && $nilai < 85) 
        $grade = 'B';
    else 
        $grade = 'C';

    // Switch case
    switch ($grade){
        case 'A':
            $predikat = 'Memuaskan';
            break;  
        case 'B':
            $predikat = 'Bagus';
            break; 
        default:
            $predikat = 'Kurang';           
    }

    echo "<hr>";

    // Cetak di dalam PHP
    echo "<p>Nama: $siswa</p>";
    echo "<p>Mata Kuliah: $matakuliah</p>";
    echo "<p>Nilai: $nilai</p>";
    echo "<p>Keterangan: $ket</p>";
    echo "<p>Grade: $grade</p>";
    echo "<p>Predikat: $predikat</p>";
}
?>