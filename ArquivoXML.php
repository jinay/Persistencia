<?php
	
	abstract class ArquivoXML{
		
		private $arquivo = 'user.xml';
		
		function getArquivo(){
			
			return $this->arquivo;
			
		}
		
		public function setArquivo($id){
			$this->arquivo=$id;
		}
		
	}
	
	interface iArquivoXML{
		
		function getArquivoXML(ArquivoXML $objArquivoXML);
		
	}
	
	class LeituraArquivoXML implements iArquivoXML{
		
		public function getArquivoXML(ArquivoXML $objArquivoXML){
			
			@header('Content-Type: text/html; charset=utf-8');
			
			$xml = simplexml_load_file('user.xml');
			
			return $xml;
			
		}
		
	}
	
	
?>