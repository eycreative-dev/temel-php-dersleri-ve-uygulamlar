<?php  



?>

<!DOCTYPE html>
<html>
<head>
	<title>Dosya Yükelem</title>
</head>
<body>
	<h1>Resim Yükleme</h1>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="file" name="file">
		<input type="submit" name="submit">
	</form>
	<hr>
	<?php  

	if (@$_POST["submit"]) {

		if ($_FILES["file"]["size"] > 0) {
        // Dosya Seçildiyse İşlemlere Başla

			$uzanti = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

			if ($uzanti == "jpg") {
				$yeniad = "uploads/" . uniqid() . "." . $uzanti;

				if (move_uploaded_file($_FILES["file"]["tmp_name"], $yeniad)) {
					echo "Dosya Başarı İle Yüklendi";
					echo "<img src='$yeniad' width='30%'/>";

		// Dosya Seçildiyse İşlemlere Başla
					
				}else{
					echo "Dosya yüklenirken bir hata oluştu.";
				}

			}else{
				echo "Sadece JPG Dosya Yüklenir";
			}



		}else{
			echo "Dosya Yükleyiniz";
		}

	}else{
		echo "Tılanmadı";
	}
	?>
</body>
</html>