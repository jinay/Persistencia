<?php
	
	error_reporting(E_ERROR);
	ini_set("display_errors", 1 );
	
	$con = mysql_pconnect("localhost","root","boni2003");

	if (!$con){
		die('Could not connect to mysql ' . mysql_error());
	}	
	else{
		mysql_select_db("SIMERS",$con);
	}
	
?>