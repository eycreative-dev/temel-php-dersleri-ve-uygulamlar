<?php  

setcookie("adimiz", "Emin", time()+10);
setcookie("adimiz", "", time()-3600); // Cookie Silme
echo $_COOKIE["adimiz"];
?>