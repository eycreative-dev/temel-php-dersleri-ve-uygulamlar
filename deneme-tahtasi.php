<?php  
$sayi = 0;
@$sayi = $_POST["sayi"];
	
?>

<form action="" method="POST">
	<input type="text" name="sayi" value="<?= $sayi + 1 ?>">
	<input type="submit" value="Artır" name="submit">
</form>