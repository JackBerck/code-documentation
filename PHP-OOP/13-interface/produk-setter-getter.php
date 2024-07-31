<?php
class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon = 0;

    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Membuat method setter untuk property judul agar bisa diubah nilainya
    public function setJudul($judul)
    {
        $this->judul = $judul;
    }

    // Membuat method getter untuk property judul agar bisa diambil nilainya
    public function getJudul()
    {
        return $this->judul;
    }

    // Membuat method setter untuk property penulis agar bisa diubah nilainya
    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    // Membuat method getter untuk property penulis agar bisa diambil nilainya
    public function getPenulis()
    {
        return $this->penulis;
    }

    // Membuat method setter untuk property penerbit agar bisa diubah nilainya
    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    // Membuat method getter untuk property penerbit agar bisa diambil nilainya
    public function getPenerbit()
    {
        return $this->penerbit;
    }

    // Membuat method setter untuk property harga agar bisa diubah nilainya
    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    // Membuat method getter untuk property harga agar bisa diambil nilainya
    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    // Membuat method setter untuk property diskon agar bisa diubah nilainya
    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    // Membuat method getter untuk property diskon agar bisa diambil nilainya
    public function getDiskon()
    {
        return $this->diskon;
    }

    public function getInfo()
    {
        return "$this->judul | $this->penulis, $this->penerbit";
    }
}

class Komik extends Produk
{
    public $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }


    public function getInfoProduk()
    {
        $str = "Komik: {$this->getInfo()} ~ {$this->jmlHalaman} halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public $jmlMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlMain)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlMain = $jmlMain;
    }

    public function getInfoProduk()
    {
        $str = "Game: {$this->getInfo()} ~ {$this->jmlMain} jam.";
        return $str;
    }
}

$produk1 = new Game("GTA V", "David Jones", "Rockstar Games", 99999, 100);
$produk2 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 66666, 123);
$produk3 = new Komik("One Punch Man", "Yusuke Murata", "Shueisha", 30000, 321);

// Mengganti judul produk2
$produk2->setJudul("One Piece");
// Mengganti penulis produk2
$produk2->setPenulis("Eiichiro Oda");
// Menampilkan judul dan penulis produk2
echo "Komik " . $produk2->getJudul() . " dibuat oleh " . $produk2->getPenulis();
