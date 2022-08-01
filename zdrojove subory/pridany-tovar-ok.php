
<?php
	include ("config.php");
	$nazov =$_POST["nazov"]; 
	$vyrobca =$_POST["vyrobca"]; 
	$popis=$_POST["popis"]; 
	$farba=$_POST["farba"]; 
	$cena=$_POST["cena"]; 
	$kod=$_POST["kod"]; 
	$var = mysqli_connect("$localhost","$user","$password","$db") or die ("Connection error!");
	$sql = "insert into `tovar` (`nazov`,`vyrobca`,`popis`,`farba`,`cena`,`kod`)
	values ('$nazov','$vyrobca','$popis','$farba','$cena','$kod')";

	$res = mysqli_query($var,$sql) or die ("Query error!");
	echo "<font color=\"black\"><br><strong>Pridanie prebehlo úspešne </strong>";
	echo "";
	header('Refresh: 3; url=index.php?menu=2');
?>