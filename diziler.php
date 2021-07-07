<?php  

//$meyveler = array("Erik", "Şeftali", "Kayısı"); 1. Yöntemde Fonksiyon Kullanarak Dizi Oluşturduk

// 2. Yöntemde Fonksiyon Oluşturmadan Eleman Atadık.
$meyveler[0] = "Erik";
$meyveler[1] = "Şeftali";
$meyveler[2] = "Kayısı";

//print_r($meyveler);
echo $meyveler[1];

foreach ($meyveler as $m) {
	echo $m . "<br>";
}

?>