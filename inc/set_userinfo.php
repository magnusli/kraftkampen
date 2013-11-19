<?php
 
	require '../config.php';
	require '../dbconnect.php';	//kobler til database
	
	//henter først ut info om brukere som allerede er lagt inn på laget
	$query="SELECT * FROM teams WHERE id='1'";
	mysql_set_charset("UTF8");
	header('Content-type: text/html; charset=utf-8'); 
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$u1=mysql_result($result,$i,"user1"); 	//Lagrer navnet på brukere i phpvariabler
	$u2=mysql_result($result,$i,"user2");
	$u3=mysql_result($result,$i,"user3");
	$u4=mysql_result($result,$i,"user4");
	
	$value = $_POST['navn'];
	
	//Sjekker plass for plass om den er ledig. Dersom den er det settes uid for senere lagring av bruker på riktig plass
	if (empty($u1)) {
		$free_position = "user1";
		$uid = "1";
	} elseif (empty($u2)) {
		$free_position = "user2";
		$uid = "2";
	} elseif (empty($u3)) {
		$free_position = "user3";
		$uid = "3";
	} elseif (empty($u4)) {
		$free_position = "user4";
		$uid = "4";
	} else {
		header( "Location: ../index.php?page=spillpaag" ) ; //Dersom det ikke finnes ledige plasser sendes klient til feilmelding
	}

	//Legger inn nytt lagmedlem på ledig plass i tabell teams
	$result = mysql_query("UPDATE teams SET $free_position='$value' WHERE id='1'") 
	or die(mysql_error());  
	
	//Legger inn nytt lagmedlem i tabell users
	$result = mysql_query("UPDATE users SET name='$value' WHERE id='$uid'") 
	or die(mysql_error());  
   
	//Setter status for bruker
	mysql_query("UPDATE users SET done1='1' WHERE id='$uid'") 
	or die(mysql_error()); 
   
   
	header( "Location: ../index.php?page=wait_info&user=$uid&stepid=1" ) ;	//Sender klient videre til neste side
?>