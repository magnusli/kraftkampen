<?php
	
	require '../config.php';
	require '../dbconnect.php';
	
	$user= htmlspecialchars($_GET["user"]); //Henter brukerid fra URL
	$ny = $_POST['ny'];
	
	//Legger inn nytt lagmedlem i teams
	$result = mysql_query("UPDATE teams SET user$user='$ny' WHERE id='1'") 
	or die(mysql_error());  
	
	//Legger inn nytt lagmedlem i tabell users
	$result = mysql_query("UPDATE users SET name='$ny' WHERE id='$user'") 
	or die(mysql_error()); 

	//Setter status for bruker
	mysql_query("UPDATE users SET done1='1' WHERE id='$user'") 
	or die(mysql_error()); 
	
	
	header( "Location: index.php" ) ;
?>

