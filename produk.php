<?php
class Produk {
    public  $judul = "judul", 
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    public function getLabel(){
        
    }
}

$produk1 = new Produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Massashi Kishimoto";
$produk1->penerbit = "Shoonen Jump";
$produk1->harga = "19.000"; 
