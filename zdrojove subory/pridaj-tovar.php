<?php
	echo '<br /><br /><br /><center>';
	echo '<b>Pridanie tovaru  </b><br/><br /> ' ;
	echo '<form action="pridany-tovar-ok.php" method="POST">';
	echo 'Názov: <input name="nazov" type="text" /><br/><br />';
	echo 'Výrobca: <input name="vyrobca" type="text"/><br/><br />';
	echo 'Popis: <input name="popis" type="text"/><br/><br/>';
	echo 'Farba: <input name="farba" type="text" /><br /><br />';
	echo 'Cena: <input name="cena" type="number" /><br /><br />';
	echo 'Kód: <input name="kod" type="text" /><br />';
	echo '<input type="submit" name="submit" value="Odoslat"/>';
	echo '<input type="reset" value="Vymaz"/>';
	echo '</form></center>';
?>
