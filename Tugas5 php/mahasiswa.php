<?php

class Mahasiswa
{
    public $nim;
    public $nama;
    public $kuliah;
    public $nilai;
    public $matakuliah; // Tambah properti matakuliah
    public $grade;
    public $predikat;
    public $status;

    public function __construct($nim, $nama, $kuliah, $nilai, $matakuliah) // Tambah parameter matakuliah
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kuliah = $kuliah;
        $this->nilai = $nilai;
        $this->matakuliah = $matakuliah; // Inisialisasi properti matakuliah
        $this->hitungGrade();
        $this->hitungPredikat();
        $this->hitungStatus();
    }


    private function hitungGrade()
    {
        if ($this->nilai >= 85) {
            $this->grade = 'A';
        } elseif ($this->nilai >= 70) {
            $this->grade = 'B';
        } elseif ($this->nilai >= 60) {
            $this->grade = 'C';
        } else {
            $this->grade = 'D';
        }
    }

    private function hitungPredikat()
    {
        switch ($this->grade) {
            case 'A':
                $this->predikat = 'Sangat Memuaskan';
                break;
            case 'B':
                $this->predikat = 'Memuaskan';
                break;
            case 'C':
                $this->predikat = 'Cukup';
                break;
            case 'D':
                $this->predikat = 'Kurang';
                break;
            default:
                $this->predikat = 'Tidak Ada';
        }
    }

    private function hitungStatus()
    {
        $this->status = ($this->nilai >= 65) ? 'Lulus' : 'Tidak Lulus';
    }
}
?>
