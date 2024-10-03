<?php
class Balok
{
    // deklarasikan atribut-atribut kelas Balok
    private $panjang;
    private $lebar;
    private $tinggi;

    
    // definisikan metode konstruktor, setter ,dan getter
    public function __construct($panjang, $lebar, $tinggi)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        $this->tinggi = $tinggi;
    }

    public function setpanjang($panjang)
    {
        $this->panjang = $panjang;
    }

    public function setlebar($lebar)
    {
        $this->lebar = $lebar;

    } public function settinggi($tinggi)
    {
        $this->tinggi = $tinggi;
    }

    public function hitungLuas()
    {
        return  2*(($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
    }

    public function hitungvolume()
    {
        return ($this->panjang * $this->lebar * $this->tinggi);
    }

    // definisikan metode menghitung volume, luas permukaan, 
}

$balok_1 = new Balok(4, 8, 5);
$balok_2 = new Balok(3, 10, 12);

echo "Luas balok: " . $balok_1->hitungLuas() . "<br>";
echo "volume balok: " . $balok_1->hitungvolume() . "<br>";

echo "Luas balok: " . $balok_2->hitungLuas() . "<br>";
echo "volume balok: " . $balok_2->hitungvolume() . "<br>";
// contoh output: Balok

// Balok 1
// Volume: 160
// Luas Permukaan: 184

// Balok 2
// Volume: 360
// Luas Permukaan: 372