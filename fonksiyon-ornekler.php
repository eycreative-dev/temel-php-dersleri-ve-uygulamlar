<?php  

function ornek($sayi = NULL){

	if ($sayi == NULL) {

		echo "Sayı Belirtmediniz";

	} elseif(!is_int($sayi)){

		echo "Geçerli Bir Sayı Değeri Belirtiniz";

	}else{

		for ($i=1; $i <= $sayi; $i++) { 
			echo $i . "<br>";
		}

	}
	
}

ornek(10);
?>

