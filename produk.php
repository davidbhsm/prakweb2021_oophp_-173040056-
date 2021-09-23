<?php
class Produk {
    public  $judul = "judul", 
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    public function getLabel(){
        return"$this->penulis, $this->penerbit";
        
    }
}

$produk1 = new Produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Massashi Kishimoto";
$produk1->penerbit = "Shoonen Jump";
$produk1->harga = "19.000"; 

$produk2 = new Produk(); // Pertemuan 3 oophp : Membuat propperty dan method
$produk2->judul = "Dota2";
$produk2->penulis = "Lord Gaben";
$produk2->penerbit = "Valve";
$produk2->harga = "free";

echo"Komik : ". $produk1->getLabel();
echo <br>
echo"Game : ". $produk2->getLabel();
