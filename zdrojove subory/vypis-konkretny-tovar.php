<!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<html>
<head>
</head>
<body>
<p align = "left">
<?php
echo "<table border='0' cellpadding='0' cellspacing='0' style='border-collapse: collapse' bordercolor='#111111' width='1080'>";
$nazov =$_POST["nazov"];
$vyrobca =$_POST["vyrobca"];
$cena=$_POST["cena"];

include ("config.php");   
$var = mysqli_connect("$localhost","$user","$password","$db") or die ("connect error");
$sql = "select id,nazov,vyrobca,popis,kod,cena,farba from tovar where cena LIKE '$cena%' AND nazov LIKE '%$nazov%' AND vyrobca LIKE '$vyrobca%'";
$result = mysqli_query($var, $sql) or exit ("chybny dotaz");
//záhlavie tabulky
echo "<tr>
    <td width='100'bgcolor='#ffffff'  style=\"padding:10px\"><b>Kod </b></td>
    <td width='100'bgcolor='#edcac7'  style=\"padding:10px\"><b>Cena</b></td>
    <td width='100'bgcolor='#ffffff'  style=\"padding:10px\"><b>Nazov</b></td>
    <td width='100'bgcolor='#edcac7'  style=\"padding:10px\"><b>Vyrobca</b></td>
    <td width='150'bgcolor='#ffffff'  style=\"padding:10px\"><b>Popis</b></td>
    <td width='50' bgcolor='#edcac7'  style=\"padding:10px\"><b>Farba</b></td>
    <td width='50' color='ff0000' bgcolor='#ffffff'  style=\"padding:10px\"><b></b></td>
  </tr>    
  <tr>
   <td width='100'bgcolor='#0000ff' height='5'></td>
    <td width='100'bgcolor='#0000ff' height='5'></td> 
    <td width='100'bgcolor='#0000ff' height='5'></td>
    <td width='100'bgcolor='#0000ff' height='5'></td>
    <td width='150'bgcolor='#0000ff' height='5'></td> 
    <td width='50'bgcolor='#0000ff' height='5'></td>
    <td width='50'bgcolor='#0000ff' height='5'></td>
  </tr>"; 
//nacítanie hodnôt do pola
$i="0";
while($row = mysqli_fetch_assoc($result))
		{ 
		$i=$i+1;
			$id = $row['id'];
      $nazov = $row['nazov'];
			$vyrobca = $row['vyrobca'];
			$popis = $row['popis'];
			$farba = $row['farba'];
      $cena = $row['cena'];
      $kod = $row['kod'];
//v�pis hodn�t
echo "<tr>
    <td width='100'bgcolor='#ffffff'  style=\"padding:10px\"> ".$kod."</b></td>
    <td width='100'bgcolor='#edcac7'  style=\"padding:10px\"> ".$cena." </b></td>
    <td width='100'bgcolor='#ffffff'  style=\"padding:10px\"> ".$nazov."</b></td>
    <td width='100'bgcolor='#edcac7'  style=\"padding:10px\"> ".$vyrobca."</b></td>
    <td width='150'bgcolor='#ffffff'  style=\"padding:10px\"> ".$popis." </b></td>
    <td width='50' bgcolor='#edcac7'  style=\"padding:10px\"> ".$farba."</b></td>
    <td width='50' color='00ff00' bgcolor='#ffffff'  style=\"padding:10px\"><b><a href='zmaz-tovar.php?id=".$id."'>Zmazat</b></a></td>
   </tr>    
  <tr>
    <td width='100'bgcolor='#000000' height='2'></td>
    <td width='100'bgcolor='#000000' height='2'></td> 
    <td width='100'bgcolor='#000000' height='2'></td>
    <td width='100'bgcolor='#000000' height='2'></td>
    <td width='150'bgcolor='#000000' height='2'></td> 
    <td width='50' bgcolor='#000000' height='2'></td>
    <td width='50' bgcolor='#000000' height='2'></td>
    </tr>";
  }
   echo "</table>";
echo "Pocet vyhovujucich zaznamov je: "; echo $i;
if ($i=="0"):
endif; 
?>

</body>
</html>
