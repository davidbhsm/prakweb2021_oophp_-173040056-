<?php  
/* 
David Bhisma Laksana
173040056
https://github.com/davidbhsm/pw2021_173040056
Pertemuan 3 - 24 September 2021
Mempelajari inheritance oophp
*/ 
?>

<?php

class Produk{
    public  $judul, 
            $penulis,
            $penerbit,
            $harga,
            $jmlhalaman,
            $waktuMain,
            $tipe;

     public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0, $waktuMain = 0, $tipe ){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhalaman = $jmlhalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe
    }

    public function getLabel(){
        return"$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap() {
        $str = "{$this->tipe} : | {$this->judul} | {$this->$getLabel} (Rp. {$this->harga})";
        if( $this->tipe == "Komik" ) {
            $str .= " - {$this->jmlhalaman} Halaman.";
        }else if( $this->tipe == "Game" ) {
            $str .= " - {$this->waktuMain} Jam.";
        }

        return $str;
    }
}

class CetakInfoProduk{
    public function cetak( Produk $produk ) {
        $str = "{$produk->$judul} | {$produk->$getLabel()} | (Rp. {$produk->harga})";
            return $str;
    }
}


$produk1 = new Produk("Naruto","Massashi Kishimoto" ,"Shoonen Jump" , 19.000, 100, 0, "Komik");
$produk2 = new Produk("Dota2","Lord Gaben" ,"Valve" ,0, 0, 50, "Game");