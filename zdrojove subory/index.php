

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title></title>
	</head>
	<body>
		<table border="0" cellspacing="0"  bordercolor="#FFFFFF"  >
			<tr>
				<td align="center" valign="top" bgcolor="#e6d7d5" style="padding:50px">  
					<?php include ("menu.php"); ?>
				</td>
				<td  valign="top" bgcolor="#e39994" style="padding:50px" >
					<DIV CLASS ="dolezite">
						<?php
							$m = $_GET["menu"];
							switch ($m){
								case 1:
								    include ("pridaj-tovar.php");
								    break;
							    case 2:
								    include ("vypis-vsetky-tovary.php");
								    break; 
							    case 3:
								    include ("hladaj-tovar.php");
									break;    
								case 4:
									include ("vypis-konkretny-tovar.php");
									break;                	
							    default:
									include ("vypis-vsetky-tovary.php");
								    break;
							}
						?>
					</DIV>
				</td>
			</tr>
		</table>
	</body>
</html>

