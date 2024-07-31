<?php

class ContohStaticCounter
{
    // Membuat property static agar bisa diakses tanpa harus membuat objek terlebih dahulu
    public static $counter = 1;

    // Membuat method static agar bisa diakses tanpa harus membuat objek terlebih dahulu
    public static function halo()
    {
        // Mengakses property static di dalam method static menggunakan self (bukan $this) karena $this merujuk pada objek yang sedang dibuat (tidak ada objek yang dibuat) sedangkan self merujuk pada class itu sendiri
        return "Halo " . self::$counter++ . " kali.";
    }
}

class ContohBiasaCounter
{
    public $counter = 1;

    public function halo()
    {
        return "Halo " . $this->counter++ . " kali.";
    }
}

// Mengakses property static di luar class menggunakan nama classnya langsung (bukan objek) karena property static tidak terikat pada objek dilanjutkan dengan operator scope resolution (::) dan nama propertynya (bukan $)
echo ContohStaticCounter::$counter;
echo "</br>";
echo ContohStaticCounter::halo();
echo "</br>";
echo ContohStaticCounter::halo();
echo "<hr>";

// Contoh biasa menggunakan objek
$contohBiasaCounter1 = new ContohBiasaCounter();
echo "<br>";
echo $contohBiasaCounter1->counter;
echo "<br>";
echo $contohBiasaCounter1->halo();
echo "<br>";
echo $contohBiasaCounter1->halo();
echo "<br>";
echo $contohBiasaCounter1->halo();
echo "<hr>";
$contohBiasaCounter2 = new ContohBiasaCounter();
echo "<br>";
echo $contohBiasaCounter2->counter;
echo "<br>";
echo $contohBiasaCounter2->halo();
echo "<br>";
echo $contohBiasaCounter2->halo();
echo "<br>";
echo $contohBiasaCounter2->halo();
