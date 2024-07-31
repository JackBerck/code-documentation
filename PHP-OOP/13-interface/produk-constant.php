<?php

// Define constant digunakan untuk mendefinisikan konstanta yang nilainya tidak dapat diubah di luar class
define('PI', 3.14);
echo PI;
echo "<br>";

class Gaya
{
    // Constant di dalam class
    const GRAVITASI = 9.8;
    public function berat($massa)
    {
        return $massa * self::GRAVITASI;
    }
}
$gaya = new Gaya();
echo $gaya->berat(100);
echo "<br>";

// Berikut beberapa penggunaan Magic Constant
// __LINE__ digunakan untuk mendapatkan nomor baris dimana konstanta tersebut digunakan
echo __LINE__;
echo "<br>";

// __FILE__ digunakan untuk mendapatkan path lengkap file yang berisi konstanta tersebut
echo __FILE__;
echo "<br>";

// __DIR__ digunakan untuk mendapatkan path direktori dimana file yang berisi konstanta tersebut berada
echo __DIR__;
echo "<br>";

// __FUNCTION__ digunakan untuk mendapatkan nama function dimana konstanta tersebut digunakan
function halo()
{
    return __FUNCTION__;
}
echo halo();
echo "<br>";

// __CLASS__ digunakan untuk mendapatkan nama class dimana konstanta tersebut digunakan
class Halo
{
    public function coba()
    {
        return __METHOD__;
    }
}
$halo = new Halo();
echo $halo->coba();
echo "<br>";
