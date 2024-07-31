<?php
class Game extends Produk implements InfoProduk
{
    public $jmlMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlMain)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlMain = $jmlMain;
    }

    public function getInfo()
    {
        return "$this->judul | $this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "Game: {$this->getInfo()} ~ {$this->jmlMain} jam.";
        return $str;
    }
}
