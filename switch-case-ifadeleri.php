<?php  



$renk = "Siyah";

switch ($renk) {
	case 'Mavi':
		echo "Seçilen renk mavi";
		break;

    case 'Kırmızı':
    	echo "Seçilen renk kırmızı";
    	break;

    case 'Siyah':
    	echo "Seçilen renk siyah";
    	break;

    	default:
    	echo "Renk Seçimi Hatalı!";
}

echo "<br><br>";

$x = 5;

switch($x) {
	case '1':
	   echo "Sayı 1";
	   break;

	case '2':
	   echo "Sayı 2";
	   break;

	case '3':
		echo "Sayı 3";
		break;

    case '4':
    	echo "Sayı 4";
    	break;

    case '5':
    	echo "Sayı 5";
    	break;

    default:
    echo "Sayı Yok";

}


echo "<br><br>";

$not = 15;

if($not >= 70 && $not <= 100) {
	
    echo 'pekiyi';

} elseif ($not >= 45 && $not < 70) {

    echo 'iyi';

} elseif ($not >= 0 && $not < 45) {

    echo 'zayıf';

} else {

    echo 'hatalı not girişi.';

}

?>