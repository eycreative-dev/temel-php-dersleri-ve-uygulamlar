<?php  


if (@$_GET["kaydet"]) {

	$ad = $_GET["ad"];
	$soyad = $_GET["soyad"];
	$cinsiyet = $_GET["cinsiyet"];
	$email = $_GET["email"];

	echo "İsim & Soyisim: ".$ad,$soyad . "<br>" . "Cinsiyet: ". $cinsiyet . "<br>" . "Email: " .$email;

}else{
	echo "Veri Yok";
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>GET İşlemi</title>
</head>
<body>
	<form action="" method="GET">

		<input type="text" name="ad" placeholder="Adınızı Giriniz"> <br>
		<input type="text" name="soyad" placeholder="Soyadınızı Giriniz"> <br>
		Erkek <input type="radio" name="cinsiyet" value="erkek"> <br>
		Kadın <input type="radio" name="cinsiyet" value="kadın"> <br>
		<input type="email" name="email" placeholder="example@gmail.com"> <br><br>
		<input type="submit" name="kaydet" value="Kaydet">
		<input type="reset" name="temizle" value="Temizle">
	</form>
</body>
</html>
