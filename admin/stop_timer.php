<?php
	require '../config.php';
	require '../dbconnect.php';
	
	mysql_query("UPDATE mainscreen SET steg='5' WHERE id='1'") 
	or die(mysql_error()); 

	header( "Location: index.php" ) ;
?>