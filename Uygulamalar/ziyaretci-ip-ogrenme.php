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

echo $ip = IpBul();

?>