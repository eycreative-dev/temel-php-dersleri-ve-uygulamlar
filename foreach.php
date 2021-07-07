<?php

/*

$dizi = array(1,2,3,4,5,6,7,8);

foreach ($dizi as $komut) {
	echo $komut * 5 . "</br>";
}

*/

$dizi = array(

	"Ad" => "Emin", 
	"Soyad"  => "Yılmaz", 
	"Yaş" => "19"

);

foreach ($dizi as $key => $value) {
	echo $key . ":" . $value . "</br>" ;
}
?>