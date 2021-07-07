<?php  
/*

Kısaca Eko Yazımı
<?  =?>

*/

$kur = simplexml_load_file("https://www.tcmb.gov.tr/kurlar/today.xml"); // XML Dosylarını çekiyor. (Diziler)

foreach ($kur -> Currency as $cur) {
	if ($cur["Kod"] == "USD") {
		$usdAlis  = $cur -> ForexBuying;
		$usdSatis = $cur -> ForexSelling;
	}

	if ($cur["Kod"] == "NOK") {
		$nokAlis  = $cur -> ForexBuying;
		$nokSatis = $cur -> ForexSelling;
	}
}
?>

<div style="width:20%">
	<h3>Dviz Kuru</h3>
	<hr>
	<b>USD Alış: </b> <?php echo $usdAlis; ?> <br>
	<b>USD Satış: </b> <?php echo $usdSatis; ?>
	<hr>
	<b>NOK Alış: </b> <?php echo $nokAlis; ?> <br>
	<b>NOK Satış: </b> <?php echo $nokSatis; ?>
</div>