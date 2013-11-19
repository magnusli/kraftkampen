<?php
	require '../config.php';
	require '../dbconnect.php';
	
	
	
	mysql_query("UPDATE teams SET user1='', user2='', user3='', user4='', score=''  WHERE id='1'") 
	or die(mysql_error());  
	
	mysql_query("UPDATE users SET name='', done1='0', done2='0', done3='0', done4='0', done5='0', done6='0'") 
	or die(mysql_error()); 
	
	mysql_query("UPDATE mainscreen SET steg='0' WHERE id='1'") 
	or die(mysql_error()); 

	header( "Location: index.php" ) ;
?>