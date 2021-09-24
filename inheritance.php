<?php  
/* 
David Bhisma Laksana
173040056
https://github.com/davidbhsm/pw2021_173040056
Pertemuan 3 - 24 September 2021
Mempelajari inheritance oophp (Bagian 2)
*/ 
?>

<?php

class Produk{
    public  $judul, 
            $penulis,
            $penerbit,
            $harga,
            $jmlhalaman,
            $waktuMain;

     public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0, $waktuMain = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhalaman = $jmlhalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel(){
        return"$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->$getLabel} (Rp. {$this->harga})";
        return $str;
    }
}


class Komik extends Produk {
    public function getInfoProduk() {
        $str = "Komik :  {$this->getInfoProduk()} | {$this->$getLabel} (Rp. {$this->harga}) - {$this->jmlhalaman} Halaman.";
            return $str;
    }
}

class Game extends Produk {
    public function getInfoProduk() {
        $str = "Game :  {$this->judul} | {$this->$getLabel} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
            return $str;
    }
}


class CetakInfoProduk{
    public function cetak( Produk $produk ) {
        $str = "{$produk->$judul} | {$produk->$getLabel()} | (Rp. {$produk->harga})";
            return $str;
    }
}


$produk1 = new Komik("Naruto","Massashi Kishimoto" ,"Shoonen Jump" , 19.000, 100, 0);
$produk2 = new Game("Dota2","Lord Gaben" ,"Valve" ,0, 0, 50;

echo $produk1->getInfoProduk();
echo <br>;
echo $produk2->getInfoProduk();