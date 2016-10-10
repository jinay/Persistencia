<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
	<HEAD>
		<TITLE> Persistência de Arquivo XML </TITLE>
	</HEAD>
	<BODY>
		<?php
			include("./ControleXML.php");
			///////////////View - Apresentação dos dados recebidos do Controller//////////////////
			
			$objBALArquivoXML = new BALArquivoXML();

			$result= $objBALArquivoXML->getArquivoXML($objBALArquivoXML);
			
			echo "<h1>Registros de XML</h1>";
			echo '<table>';
			foreach($result->user as $user){
				if($user['status'] == 1){
					echo '<tr>';
					echo '<td>'. $user['status'] .'</td>';
					echo '<td>'. $user['email'] .'</td>';
					echo '<td>'. $user['senha'] .'</td>';
					echo '<td>'. $user['usuario'] .'</td>';
					echo '<td>'. $user['sobrenome'] .'</td>';
					echo '<td>'. $user['nome'] .'</td>';
					echo '<td>'. $user['id'] .'</td>';
					echo '</tr>';
				}
			}
			echo '</table>';
		?>
	</BODY>
</HTML>