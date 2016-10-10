<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
	<HEAD>
		<TITLE> Persistência de Banco de  Dados </TITLE>
	</HEAD>
	<BODY>
		<?php
			include("./Controle.php");
			///////////////View - Apresentação dos dados recebidos do Controller//////////////////
			
			$objBALUser = new BALUser();

			$result= $objBALUser->getUser($objBALUser);
			
			echo "<h1>Registros de Banco</h1>";
			echo '<table>';
			while($row = mysql_fetch_row($result)){
				echo '<tr>';
				echo '<td>'.$row[0].'</td>';
				echo '<td>'.$row[1].'</td>';
				echo '<td>'.$row[2].'</td>';
				echo '<td>'.$row[3].'</td>';
				echo '<td>'.$row[4].'</td>';
				echo '<td>'.$row[5].'</td>';
				echo '</tr>';
			}
			echo '</table>';
		?>
	</BODY>
</HTML>