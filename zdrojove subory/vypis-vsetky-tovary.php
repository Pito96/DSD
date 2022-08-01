 <!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<html>
<head>
       <title>vyhladaj</title>
        <link href="style.css" rel=stylesheet type=text/css>
</head>
<body>

<?php
echo "<table border='0' cellpadding='0' cellspacing='0' style='border-collapse: collapse' bordercolor='#111111' width='1080'>";
include ("config.php");   
$var = mysqli_connect("$localhost","$user","$password","$db") or die ("Connection error!");
$sql = "select id,nazov,vyrobca,popis,kod,cena,farba from tovar";
$result = mysqli_query($var, $sql) or exit ("Query error!");
//načítanie hodnôt do pola
while($row = mysqli_fetch_assoc($result))
		{ 
			$id = $row['id'];
      $nazov = $row['nazov'];
			$vyrobca = $row['vyrobca'];
			$popis = $row['popis'];
			$farba = $row['farba'];
      $cena = $row['cena'];
      $kod = $row['kod'];
//výpis hodnôt
echo "<tr >
    <td width='200'bgcolor='#ffffff' height='22' style=\"padding:10px\"><b> ".$kod."</b></td>
    <td width='300'bgcolor='#ffffff' height='22' style=\"padding:10px\">Nazov: <b> ".$nazov."</b></td> 
    <td width='100'bgcolor='#ffffff' height='22' style=\"padding:10px\">Cena: <b> ".$cena."</b></td>
    <td width='100'bgcolor='#ffffff' height='22' style=\"padding:10px\"></td>
     </tr>
     <tr>
    <td width='200'bgcolor='#edcac7' height='32' style=\"padding:10px\">Vyrobca: <b> ".$vyrobca."</b></td>
    <td width='300'bgcolor='#edcac7' height='32' style=\"padding:10px\">Popis: <b>".$popis." </b></td>
    <td width='100'bgcolor='#edcac7' height='32' style=\"padding:10px\">Farba: <b>".$farba."</b></td>
    <td width='100' color='ff0000' bgcolor='#edcac7' height='32'><b><a href='zmaz-tovar.php?id=".$id."'>Zmazat</b></a></td>
  </tr>   
  <tr>
   <td width='200'bgcolor='#000000' height='1'></td>
    <td width='300'bgcolor='#000000' height='1'></td> 
    <td width='100'bgcolor='#000000' height='1'></td>
    <td width='100'bgcolor='#000000' height='1'></td>
    </tr>";
  }
  echo "</table>";
?>

 </body>
</html>
