<?php  
require_once 'veri-tabani-baglantisi.php';

// ASC   ->  Küçükten Büyüğe / A'dan Z'ye Doğru Sıralar
// DESC  -> Büyükten Küçüğe / Z'den A'ya Dorğu Sıralar
// AND   - OR - NOT İfadeli kullanılabilir.
// LIKE  -> Gibi İfadesi.

$select = $db -> prepare("SELECT * FROM `haberler` WHERE `aciklama` LIKE '%%' ");


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