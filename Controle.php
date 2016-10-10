<?php
	
	include_once('./User.php');
	
	class BALUser extends User{
		
		public function getUser(User $objUser){
			
			$objiUser=new DALUser();
			return $objiUser->getUser($objUser); 
			
		}
		
		public function DALUser(User $objUser){
			
			$objiUser=new DALUser();
			return $objiUser->DALUser($objUser);
			
		}
		
	}
	
?>