<h1>Teste</h1>
<?php
	
	
	$config = parse_ini_file( 'config.ini' );
	
	
	if ($config['persistencia'] == "BD"){
		include("./ApresentacaoBD.php");
		$conteudo='ApresentacaoBD.php';
	}
	elseif ($config['persistencia'] == "XML"){
		include("./ApresentacaoXML.php");
		$conteudo='ApresentacaoXML.php';
	}
	else{
		echo 'Configuração inexistente';
	}
	
   /* include("./ApresentacaoBD.php");
    include("./ApresentacaoXML.php");*/
	
	error_reporting(E_ERROR);
	ini_set("display_errors", 1 );
		
	
	/*print "<a href=\"index.php?conteudo=$conteudo\"><h3>Persistência de Banco</h3></a>";*/
	
?> 