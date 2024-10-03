<?php
class Siswa {
    private $nama;
    private $nisn;
    private $alamat;
    private $jurusan;
    private $tanggalLahir;

    public function __construct($nama, $nisn, $alamat, $jurusan, $tanggalLahir) {
        $this->nama = $nama;
        $this->nisn = $nisn;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;
        $this->tanggalLahir = $tanggalLahir;
    }

    public function hitungUmur() {
        $tanggalLahir = new DateTime($this->tanggalLahir);
        $today = new DateTime();
        $umur = $today->diff($tanggalLahir);
        return $umur->y;
    }
}

// Membuat objek siswa
$siswa1 = new Siswa("Bambang", "1234", "Loa Bakung", "PPLG", "2006-11-27");
$siswa2 = new Siswa("Bahrun", "1235", "Air Putih", "PPLG", "2007-01-13");

// Menghitung umur masing-masing siswa
$umurSiswa1 = $siswa1->hitungUmur();
$umurSiswa2 = $siswa2->hitungUmur();

// Membandingkan umur dan menampilkan hasil
if ($umurSiswa1 > $umurSiswa2) {
    echo "Bambang lebih tua dibandingkan Bahrun.";
} else if ($umurSiswa1 < $umurSiswa2) {
    echo "Bahrun lebih tua dibandingkan Bambang.";
} else {
    echo "Bambang dan Bahrun seusia.";
}
?>