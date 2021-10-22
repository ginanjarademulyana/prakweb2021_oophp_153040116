<!-- 
  
Ginanjar Ade Mulyana
153040116
https://github.com/ginanjarademulyana/prakweb2021_oophp_153040116
Pertemuan 3 - 24 September 2021 
Materi Mengenai OOPHP (Inheritence Problem)

-->

<?php

class Produk
{
  public $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlHalaman,
    $waktuMain,
    $tipe;

  public function __construct($judul  = "judul", $penulis = "penulis", $penerbit  = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
    $this->tipe = $tipe;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoLengkap()
  {
    // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman)
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    if ($this->tipe == "Komik") {
      $str .= " - {$this->jmlHalaman} Halaman.";
    } elseif ($this->tipe == "Game") {
      $str .= " ~ {$this->waktuMain} Jam.";
    }
    return $str;
  }
}

class cetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->judul} | {$produk->getLabel()} | (Rp. {$produk->harga})";
    return $str;
  }
};

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("uncharted", "Neil Druckmann", "Sonny Computer", 250000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
