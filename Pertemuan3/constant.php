<!-- 
  
Ginanjar Ade Mulyana
153040116
https://github.com/ginanjarademulyana/prakweb2021_oophp_153040116
Pertemuan 3 - 24 September 2021 
Materi Mengenai OOPHP (Constant)

-->

<?php

// define('NAMA', 'Ginanjar Ade Mulyana');
// echo NAMA;

// echo "<br>";

// const UMUR = 24;
// echo UMUR;

// class Coba {
//   const NAMA = 'Gingin';
// }

// echo Coba::NAMA;

// echo __LINE__;
// echo "<br>";
// echo __FILE__;
// echo "<br>";
// echo __DIR__;

// function coba() {
//    return __FUNCTION__;
// }
// echo coba;

class Coba
{
  public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
