<?php  
/* 
David Bhisma Laksana
173040056
https://github.com/davidbhsm/pw2021_173040056
Pertemuan 3 - 24 September 2021
Mempelajari visibility pada vidio oophp
*/ 
?>

<?php

class Produk{
    public  $judul, 
            $penulis,
            $penerbit;

    protected  $diskon = 0;
    private $harga;

     public function __construct( $judul = "judul", $penulis = "penulis",
      $penerbit = "penerbit", $harga = 0 ){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ( $this->harga * $this->diskon / 100 );
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

    public $jmlhalaman;

    public function __construct( $judul = "judul", $penulis = "penulis",
     $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0 ) { 

        parent::__construct( $judul, $penulis,
        $penerbit, $harga );

        $this->jmlhalaman = $jmlhalaman;
     }   
        public function getInfoProduk() {
            $str = "Komik :  " . parent::getInfoProduk() . " - {$this->jmlhalaman} Halaman.";
                return $str;
        }
}

class Game extends Produk {
    public $waktuMain;

    public function __construct( $judul = "judul", $penulis = "penulis",
    $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) {
        parent::__construct( $judul, $penulis,
        $penerbit, $harga)

        $this->waktuMain = $waktuMain;
    }
    
    public function setDiskon( $diskon ){
        $this->diskon = $diskon;
    }

        public function getInfoProduk() {
            $str = "Game :  " . parent::getInfoProduk() ." - {$this->waktuMain} Jam.";
                return $str;
    }
}


class CetakInfoProduk{
    public function cetak( Produk $produk ) {
        $str = "{$produk->$judul} | {$produk->$getLabel()} | (Rp. {$produk->harga})";
            return $str;
    }
}


$produk1 = new Komik("Naruto","Massashi Kishimoto" ,"Shoonen Jump" , 19.000, 100;
$produk2 = new Game("Dota2","Lord Gaben" ,"Valve" , 0, 50;

echo $produk1->getInfoProduk();
echo <br>;
echo $produk2->getInfoProduk();