<?php
	require '../config.php';
	require '../dbconnect.php';
	
	$uid= htmlspecialchars($_GET["uid"]);
	
	mysql_query("UPDATE teams SET user$uid='' WHERE id='1'") 
	or die(mysql_error());  
	
	mysql_query("UPDATE users SET name='', done1='0', done2='0', done3='0', done4='0', done5='0', done6='0' WHERE id='$uid'") 
	or die(mysql_error()); 
	
	//Setter status for bruker
	mysql_query("UPDATE users SET done1='0' WHERE id='$uid'") 
	or die(mysql_error()); 
	
	header( "Location: index.php" ) ;
	 
?>