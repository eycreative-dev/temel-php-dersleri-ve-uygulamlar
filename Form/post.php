<?php  

include 'function.php';
$aylar = array("Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz","Ağustos","Eylül","Ekim","Kasım","Aralık");

if (@$_POST["kaydet"]) {
	
	$ad = $_POST["ad"];
	$soyad = $_POST["soyad"];
	$cinsiyet = $_POST["cinsiyet"];
	$email = $_POST["email"];
	$gun = $_POST["gun"];
	$ay = $_POST["ay"];
	$yil = $_POST["yil"];


}else{
	echo "Veri Yok";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Tasarımı</title>
</head>
<body>
	<form action="" method="POST">

		<input type="text" name="ad" placeholder="Adınızı Giriniz"> <br>
		<input type="text" name="soyad" placeholder="Soyadınızı Giriniz"> <br>
		Erkek <input type="radio" name="cinsiyet" value="Erkek"> <br>
		Kadın <input type="radio" name="cinsiyet" value="Kadın"> <br>
		<input type="email" name="email" placeholder="example@gmail.com"> <br><br>

		<select name="gun">
			<?php  

			for ($i=1; $i < 31; $i++) { 
				echo '<option value="'.$i.'">'.$i.'</option>';
			}
			?>
		</select>

		<select name="ay">

			<?php 
			foreach($aylar as $ay){
				echo '<option value="'.$ay.'">'.$ay.'</option>';
			} 
			?>

		</select>

		<select name="yil">
			<?php  

			for ($i=1900; $i < date(Y); $i++) { 
				echo '<option value="'.$i.'">'.$i.'</option>';
			}
			?>
		</select>
		<br><br>
		<input type="submit" name="kaydet" value="Kaydet">
		<input type="reset" name="temizle" value="Temizle">
	</form>
	<hr>
	<?php 

	echo "<b>İsim & Soyisim: </b>" . @$ad . @$soyad . "<br> <b>Cinsiyet:</b> " . @$cinsiyet . "<br> <b>Email:</b> " . @$email . "<br> <b>Doğum Tarihi:</b> " . @$gun,@$ay,@$yil;

	?>
</body>
</html>