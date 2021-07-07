<?php  

// Global değişkenleri Function dışındaki değişkeni içeri almaya yarar.

$sayi = 10;

function toplama($x)
{
	global $sayi;
	return $x + $sayi;
}

echo toplama(10);
?>