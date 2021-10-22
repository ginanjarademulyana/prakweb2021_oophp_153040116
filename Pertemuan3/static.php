<!-- 
  
Ginanjar Ade Mulyana
153040116
https://github.com/ginanjarademulyana/prakweb2021_oophp_153040116
Pertemuan 3 - 24 September 2021 
Materi Mengenai OOPHP (Static Keyword)

-->

<?php

class Contoh
{
  public static $angka = 1;

  public function halo()
  {
    return "Halo " . self::$angka++ . " kali. <br>";
  }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";
$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
