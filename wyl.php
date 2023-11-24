<?php
$login=$_GET["login"];
setcookie("cook", $cookie_value, time() - (3600), "/");
header('Location: zal.php'); 
?>