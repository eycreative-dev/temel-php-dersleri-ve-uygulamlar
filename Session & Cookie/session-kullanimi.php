<?php  
session_start();

$_SESSION["isim"]    = "Ahmet";
$_SESSION["soyad"]   = "Yılmaz";
$_SESSION["uyeler"]  = array("Mehmet","Veli","Ayşe");

session_destroy();

// unset($_SESSION["soyad"]);
// echo $_SESSION["soyad"];

// echo "Hoşgeldin: <b>$_SESSION[isim] $_SESSION[soyad]</b>";

?>