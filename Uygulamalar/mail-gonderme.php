<?php 

if (@$_POST["submit"]) {

	$email    = $_POST["email"];
	$baslik   = $_POST["baslik"];
	$mesaj    = $_POST["mesaj"];
	$mesaj    = $_POST["adsoyad"];
	$headers  = "From: info@eycreative.org";
	$sonuc = mail($email, $baslik, $mesaj, $headers);

	if ($sonuc) {
		echo "Başarı İle Gönderildi";
	}else{
		echo "Mesaj Gönderilirken Bir Hata Oluştu";
	}
}

?>

<form action="" method="POST">
	<input type="text" name="adsoyad" placeholder="Adınız ve Soyadınız" required>
	<input type="email" name="email"  placeholder="Email Adresiniz" required>
	<input type="text" name="baslik" placeholder="Konu Nedir" required><br>
	<textarea name="mesaj" cols="30" rows="10"></textarea>
	<input type="submit" name="submit" value="Gönder">
</form>