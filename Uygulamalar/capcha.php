<?php  
if (@$_POST["submit"]) {
	if ($_POST["capcha"] == $_POST["hCaptche"]) {
		echo "Form Başarı İle Gönderildi";
	}else{echo "<b>Doğrulama Kodu Yanlış</b>";}
}
?>

<form action="" method="POST">
	<input type="text" name="ad" placeholder="Adınız-Soyadınız" required>
	<input type="email" name="email" placeholder="ornek@mail.com" required>
	<br><br>
	<input type="text" name="capcha" placeholder="Doğrulama Kodunu Giriniz" required>
	<?= $kontrol = rand(1111,9999); ?>
	<br><br>
	<input type="submit" name="submit" value="Gönder">
	<input type="hidden" name="hCaptche" value="<?= $kontrol ?>">
</form>
