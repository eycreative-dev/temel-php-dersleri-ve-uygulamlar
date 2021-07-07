<?php  

function faktoriyel($sayi)
{
	if ($sayi == 0) {
		return 1;
	}

	return $sayi * faktoriyel($sayi - 1);
}

// 6*5*4*3*2*1

echo faktoriyel(4);
?>