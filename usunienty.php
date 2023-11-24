<?php
$con = new mysqli("127.0.0.1", "root", "", "ksiega");

$xd=$_GET["jj"];

$q="DELETE FROM ksiega WHERE id='$xd'";
 $wynik=$con->query($q);
 header('Location: usun.php'); 
?>