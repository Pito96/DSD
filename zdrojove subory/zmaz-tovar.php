<?php
include ("config.php");   

$var = mysqli_connect("$localhost","$user","$password","$db") or die ("Connection error!");
$sql = "delete from tovar where id=" . $_GET["id"];
$result = mysqli_query($var, $sql) or exit ("Query error!");
echo "<font color=\"black\"><br><strong>Odstranenie prebehlo úspešne </strong>";
echo "";
header('Refresh: 3; url=index.php?menu=2');
?>