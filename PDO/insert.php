<?php  
require_once 'veri-tabani-baglantisi.php';

// Veri Tabanı Ekleme İşlemleri

$baslik = "Bu bir başlıktır 2";
$aciklama = "Bu bir açıklamadır 2";


$insert = $db -> prepare("INSERT INTO `haberler` (`baslik`,`aciklama`) VALUES (:baslik, :aciklama)");
$insert -> bindParam(":baslik", $baslik, PDO::PARAM_STR); // binParam Tırnaklı İfade Kullanılmaz.
$insert -> bindValue(":aciklama", $aciklama, PDO::PARAM_STR); // binValue Tırnaklı ifade kullanılabilir.

if ($insert -> execute()) {
	echo "Başarıyla Eklendi";
}else{
	echo "Hata Oluştu";
}

?>