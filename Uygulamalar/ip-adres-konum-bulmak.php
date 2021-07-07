<?php  


function IpBul()
{
	if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
		$ipAddres = $_SERVER["HTTP_CLIENT_IP"];
	}elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
		$ipAddres = $_SERVER["HTTP_X_FORWARDED_FOR"];
	}else{
		$ipAddres = $_SERVER["REMOTE_ADDR"];
	}
	return $ipAddres;
}

$api = file_get_contents("http://ip-api.com/json/?fields=61439");
// print_r($api);
$dec = json_decode($api);

echo "IP Adres: " . $ip = IpBul() . "<br>";
echo "Ülke: $dec->country ($dec->countryCode) <br> Şehir: $dec->city";

?>