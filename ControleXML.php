<?php
	
	include_once('./ArquivoXML.php');
	
	class BALArquivoXML extends ArquivoXML{
		
		public function getArquivoXML(ArquivoXML $objArquivoXML){
			
			$objiArquivoXML=new LeituraArquivoXML();
			return $objiArquivoXML->getArquivoXML($objArquivoXML); 
			
		}
		
		public function LeituraArquivoXML(ArquivoXML $objArquivoXML){
			
			$objiArquivoXML=new LeituraArquivoXML();
			return $objiArquivoXML->LeituraArquivoXML($objArquivoXML);
			
		}
		
	}
	
?>