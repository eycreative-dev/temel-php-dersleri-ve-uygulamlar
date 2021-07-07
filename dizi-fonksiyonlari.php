<?php  

$renkler = array("mavi", "pembe", "yeşil", "turuncu", "mor");
$yaslar  = array("mavi", "siyah", "yeşil", "turuncu", "mor");

// var_dump($renkler);
// echo count($renkler); // Dizide kaç tane elaman olduğunu gösterir
// var_dump(is_array($renkler)); // Dizide eleman var mı yok mu bunu gösterir.
// array_push($renkler, "Birinci", "İkinci"); // Diziye eleman ekler.
// array_pop(); // Dizinin içindeki en son elemanı siler.

/*
in_array'ı if ile kullanarak, dizinin içerisndeki bir elamanı sorgulatabiliriz.

if (in_array("mavi", $renkler)) {
	echo "Var";
}else{
	echo "Yok";
}

*/

// $sonuc = array_diff($renkler, $yaslar); // Dizileri karşılarştırır ve farklı olanları ekrana yazdırır.
print_r($renkler);


?>