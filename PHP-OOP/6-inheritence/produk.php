<?php

// Jualan Produk
// Cara mendefinisikan sebuah class dengan menggunakan keyword class diikuti dengan nama class yang diinginkan, usahakan nama class menggunakan huruf kapital diawali dengan huruf besar (PascalCase)
class Produk
{
    // Membuat property dengan menggunakan visibility public agar bisa diakses dari luar class dan menerapkan nilai default agar property memiliki nilai awal
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    // Membuat constructor dengan parameter yang memiliki nilai default agar ketika object dibuat tidak perlu mengisi parameter tersebut
    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        // Mengisi nilai property dari object yang telah dibuat dengan menggunakan operator -> (object operator) diikuti dengan nama property yang ingin diisi
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Membuat method dengan menggunakan visibility public agar bisa diakses dari luar class
    public function getInfo()
    {
        // Mengembalikan nilai dari property yang ada di dalam class
        // Gunakan $this-> (self operator) untuk mengakses property yang ada di dalam class, jika tidak menggunakan self operator maka PHP akan mencari variabel diluar class
        return "$this->judul | $this->penulis, $this->penerbit";
    }
}

// Membuat class baru yang merupakan turunan dari class Produk agar bisa menggunakan property dan method yang ada di class Produk (inheritance)
// Class Komik ini memiliki property jmlHalaman yang tidak ada di class Produk
class Komik extends Produk
{
    public $jmlHalaman;

    // Memanggil constructor dari class Produk agar property yang ada di class Produk bisa diakses oleh class Game
    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman)
    {
        // Menggunakan method parent::__construct() untuk memanggil constructor dari class Produk agar property yang ada di class Produk bisa diakses oleh class Game
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }


    public function getInfoProduk()
    {
        // Mengakses method getInfo() yang ada di class Produk
        $str = "Komik: {$this->getInfo()} ~ {$this->jmlHalaman} halaman.";
        return $str;
    }
}

// Class Komik ini memiliki property jmlHalaman yang tidak ada di class Produk
class Game extends Produk
{
    public $jmlMain;

    // Memanggil constructor dari class Produk agar property yang ada di class Produk bisa diakses oleh class Game
    public function __construct($judul, $penulis, $penerbit, $harga, $jmlMain)
    {
        // Menggunakan method parent::__construct() untuk memanggil constructor dari class Produk agar property yang ada di class Produk bisa diakses oleh class Game
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlMain = $jmlMain;
    }

    public function getInfoProduk()
    {
        $str = "Game: {$this->getInfo()} ~ {$this->jmlMain} jam.";
        return $str;
    }
}

// class CetakInfoProduk
// {
//     // Membuat method dengan menggunakan visibility public agar bisa diakses dari luar class dan menerima parameter object agar bisa mengakses property yang ada di dalam object tersebut
//     public function cetak(Produk $produk)
//     {
//         // Mengembalikan string yang berisi property dari object yang diinputkan
//         $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
//         return $str;
//     }
// }

// Cara membuat object instance dari class dengan menggunakan keyword new diikuti dengan nama class yang diinginkan
// $produk1 = new Produk();
// Mengisi nilai property dari object yang telah dibuat dengan menggunakan operator -> (object operator) diikuti dengan nama property yang ingin diisi
// $produk1->judul = "Naruto";

// $produk2 = new Produk();
// Jika mengisi nilai property yang tidak ada pada object yang dibuat, maka property tersebut akan ditambahkan ke object tersebut
// $produk2->tahunTerbit = 2000;

// Cara membuat object instance dari class dengan menggunakan keyword new diikuti dengan nama class yang diinginkan dan mengisi parameter yang ada di constructor agar lebih mudah ketimbang mengisi property satu per satu
$produk1 = new Game("GTA V", "David Jones", "Rockstar Games", 99999, 100);
$produk2 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 66666, 123);
$produk3 = new Komik("One Punch Man", "Yusuke Murata", "Shueisha", 30000, 321);

// Membuat object instance dari class CetakInfoProduk
// $cetakProduk1 = new CetakInfoProduk();

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo $produk3->getInfoProduk();
echo "<br>";
// echo $cetakProduk1->cetak($produk1);

// Output:
// Game: GTA V | David Jones, Rockstar Games (Rp. 999999) - 100 jam
// Komik: Naruto | Masashi Kishimoto, Shonen Jump (Rp. 66666) - 124 halaman
