<?php  

$sayi = 0;
$toplam = 0;

while ( $sayi <= 10) {
	// echo $sayi . "</br>";

	$toplam += $sayi;     

	$sayi++;
}

echo "<hr> Toplam:" . $toplam;
?>