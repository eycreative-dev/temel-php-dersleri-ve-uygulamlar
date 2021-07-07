<?php  

// echo time(); // 1 Ocak 1970 Tarihinden Geçen Saniyedir.

date_default_timezone_set("Europe/Istanbul"); // Türkiye Saati
setlocale(LC_ALL, "turkish"); // Günleri türkçe yapar
// echo date("Y-m-d"); // Tarihi Gösterir
// echo date("H:i:s"); // Saati Gösterir

$tarih = "2020-07-03 19:00:00";
// echo strtotime($tarih);
$unix = "1593792000";
echo strftime("%A (%d) %B %Y - %H:%M:%S", $unix);


?>

