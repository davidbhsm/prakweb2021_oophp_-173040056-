<?php  
/* 
David Bhisma Laksana
173040056
https://github.com/davidbhsm/pw2021_173040056
Pertemuan 3 - 24 September 2021
Mempelajari constant pada vidio oophp
*/ 
?>

<?php

// define('Nama', 'David Bhisma Laksana');
// echo NAMA;

// echo "<br>"

// const UMUR = 32;

// class Coba {
//     const NAMA = 'David';
// }

// echo Coba::NAMA;

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;






?>