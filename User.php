<?php

	include_once './Banco.php';
	
	abstract class User{
		
		private $status;
		private $email;
		private $senha;
		private $usuario;
		private $sobrenome;
		private $nome;
		private $id;
		
	}
	
	interface iUser{
		
		function getUser(User $objUser);
		
	}
	
	class DALUser implements iUser{		
		
		
		public function getUser(User $objUser){
			$result= mysql_query("SELECT status,email,senha,usuario,sobrenome,nome,id FROM SIMERS.user WHERE status = 1");
			return $result;
		}
		
	}
	
?>