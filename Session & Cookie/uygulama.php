<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Giriş Yap</title>
</head>
<body>

	<form action="" method="POST">
		<input type="text" name="username" placeholder="Kullanıcı Adı" required> 
		<input type="password" name="password" placeholder="******" required>
		<input type="submit" name="submit" value="Giriş Yap">
	</form>

	<?php 

	// error_reporting(0); Hataları gizler

	if (@$_POST["submit"]) {
		if (@$_POST["username"] == "emin" && @$_POST["password"] = "123456") {

			$_SESSION["kadi"] = $_POST["username"];
			header("Location: uye.php");

		}else{
			echo "Kullanıcı Adı veya Şifre Yanlış";
		}
	}
	?>

</body>
</html>