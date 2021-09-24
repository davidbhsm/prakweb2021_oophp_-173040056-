<?php  
/* 
David Bhisma Laksana
173040056
https://github.com/davidbhsm/pw2021_173040056
Pertemuan 3 - 24 September 2021
Mempelajari static pada vidio oophp
*/ 
?>

<?php

//     class ContohStatic {
//         public static $angka = 1;

//         public static function hallo() {
//             return "hallo." . self::$angka++ . "kali.";
//         }
//     }

// echo    ContohStatic::$angka;
// echo    "<br>"
// echo    ContohStatic::hallo();
// echo    "<hr>"
// echo    ContohStatic::hallo();


class Contoh {
    public $angka = 1;

    public function halo() {
        return "halo " . self::$angka++ . "kali. <br>";
    }

}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();




?>