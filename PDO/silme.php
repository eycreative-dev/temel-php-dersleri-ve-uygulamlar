<?php  


require_once 'veri-tabani-baglantisi.php';

$sil = $db -> prepare("DELETE FROM `haberler` WHERE `id` = :id");
$sil -> bindValue(":id", 4, PDO::PARAM_INT);
if ($sil -> execute()) {
	echo "Başarı İle Silindi";
}else{
	echo "Hata Oluştu";
}

$select = $db -> prepare("SELECT * FROM `haberler`");
if ($select -> execute()) {
	
	?>

	<table border="" cellpadding="5">
		<tr>
			<th>ID</th>
			<th>Başlık</th>
			<th>Açıklama</th>
			<th>Tarih</th>
			<th>İşlemler</th>
		</tr>
		<?php while($row = $select -> fetch(PDO::FETCH_ASSOC)){ ?>
			<tr>
				<td><?= $row["id"] ?></td>
				<td><?= $row["baslik"] ?></td>
				<td><?= $row["aciklama"] ?></td>
				<td><?= $row["tarih"] ?></td>
				<td>Güncelle | Sil</td>
			</tr>
		<?php } ?>
	</table>

	<?php

}else{
	echo "Hata Oluştu";
}


?>

