<?php  


require_once 'veri-tabani-baglantisi.php';


$guncelle = $db -> prepare("UPDATE `haberler` SET `baslik` = :baslik, `aciklama` = :aciklama WHERE `id` = :id ");
$guncelle -> bindValue(":baslik", "Başlık Değişti", PDO::PARAM_STR);
$guncelle -> bindValue(":aciklama", "Açıklama Dğeişti", PDO::PARAM_STR);
$guncelle -> bindValue(":id", 3, PDO::PARAM_INT);

$guncelle -> execute();


$select = $db -> prepare("SELECT * FROM `haberler` WHERE `id` = 3");
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

