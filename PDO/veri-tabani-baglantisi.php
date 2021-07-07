<?php  

define("_HOST",    "localhost");
define("_DBNAME",  "phpdersler");
define("_DBUSER",  "root");
define("_DBPASS",  "");

try {
	
	$db = new PDO("mysql:host="._HOST.";dbname="._DBNAME."", _DBUSER, _DBPASS);
	$db -> exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");

} catch (PDOException $ex) {
	echo $ex -> getMessage();
}



?>