<?php
include "index.php";
$mangga = $_POST["mangga"];
$jambu = $_POST["jambu"];
$salak = $_POST["salak"];
class buah
{
    var $totalMangga, $totalJambu, $totalSalak;
   
    public function __construct($mangga, $jambu, $salak){
        $this->mangga = $mangga;
        $this->jambu = $jambu;
        $this->salak = $salak;
    }

    public function hargaMangga(){
        $this->totalMangga = $this->mangga * 15000;
        echo "<br>Harga Mangga : ".$this->totalMangga;
    }

    public function hargaJambu(){
        $this->totalJambu = $this->jambu * 13000;
        echo "<br>Harga Jambu : ".$this->totalJambu;
    }

    public function hargaSalak(){
        $this->totalSalak = $this->salak * 10000;
        echo "<br>Harga Salak : ".$this->totalSalak;
    }

    public function hargaTotal(){
        $total = $this->totalMangga + $this->totalJambu + $this->totalSalak;
        echo "<br>Total Belanjaan = ". $total;
    }
}
$transaksi = new buah($mangga, $jambu, $salak);
$transaksi->hargaMangga();
$transaksi->hargaJambu();
$transaksi->hargaSalak();
$transaksi->hargaTotal();
?>